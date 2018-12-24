<?php

namespace App\Http\Controllers\Api\Account;

use Illuminate\Http\Request;
use App\Models\Account\Company;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Api\ApiController;
use App\Services\Account\Company\CreateCompany;
use App\Services\Account\Company\UpdateCompany;
use App\Services\Account\Company\DestroyCompany;
use App\Exceptions\MissingParameterException;
use App\Http\Resources\Company\Company as CompanyResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiCompanyController extends ApiController
{
    /**
     * Get the list of companies.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $companies = auth()->user()->account->companies()
                ->orderBy($this->sort, $this->sortDirection)
                ->paginate($this->getLimitPerPage());
        } catch (QueryException $e) {
            return $this->respondInvalidQuery();
        }

        return CompanyResource::collection($companies);
    }

    /**
     * Get the detail of a given company.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $companyId)
    {
        try {
            $company = Company::where('account_id', auth()->user()->account_id)
                ->where('id', $companyId)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        return new CompanyResource($company);
    }

    /**
     * Store the company.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $company = (new CreateCompany)->execute(
                $request->all()
                    +
                    [
                    'account_id' => auth()->user()->account->id,
                ]
            );
        } catch (ModelNotFoundException $e) {
            dd($e);
            return $this->respondNotFound();
        } catch (MissingParameterException $e) {
            dd($e);
            return $this->respondInvalidParameters($e->errors);
        } catch (QueryException $e) {
            dd($e);
            return $this->respondInvalidQuery();
        }

        return new CompanyResource($company);
    }

    /**
     * Update a company.
     *
     * @param  Request $request
     * @param  int $companyId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $companyId)
    {
        try {
            $company = (new UpdateCompany)->execute(
                $request->all()
                    +
                    [
                    'account_id' => auth()->user()->account->id,
                    'company_id' => $companyId,
                ]
            );
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        } catch (MissingParameterException $e) {
            return $this->respondInvalidParameters($e->errors);
        } catch (QueryException $e) {
            return $this->respondInvalidQuery();
        }

        return new CompanyResource($company);
    }

    /**
     * Delete a company.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $companyId)
    {
        try {
            (new DestroyCompany)->execute([
                'account_id' => auth()->user()->account->id,
                'company_id' => $companyId,
            ]);
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        } catch (MissingParameterException $e) {
            return $this->respondInvalidParameters($e->errors);
        } catch (QueryException $e) {
            return $this->respondInvalidQuery();
        }

        return $this->respondObjectDeleted((int)$companyId);
    }
}
