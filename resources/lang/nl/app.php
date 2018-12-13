<?php

return [
    'update' => 'Bijwerken',
    'save' => 'Opslaan',
    'add' => 'Toevoegen',
    'cancel' => 'Annuleren',
    'delete_confirm' => 'Sure?',
    'delete' => 'Verwijderen',
    'edit' => 'Bewerken',
    'upload' => 'Uploaden',
    'download' => 'Download',
    'save_close' => 'Save and close',
    'close' => 'Sluiten',
    'create' => 'Maak',
    'remove' => 'Verwijderen',
    'revoke' => 'Intrekken',
    'done' => 'Gereed',
    'back' => 'Back',
    'verify' => 'Bevestigen',
    'for' => 'voor',
    'new' => 'nieuw',
    'unknown' => 'Ik weet het niet',
    'load_more' => 'Meer laden',
    'loading' => 'Laden...',
    'with' => 'met',
    'days' => 'dag|dagen',
    'today' => 'vandaag',
    'yesterday' => 'gisteren',
    'another_day' => 'een andere dag',
    'date' => 'Datum',
    'type' => 'Soort',
    'zoom' => 'Zoom',
    'upgrade' => 'Upgrade to unlock',

    'application_title' => 'Monica – persoonlijke relatie manager',
    'application_description' => 'Monica is een app voor het beheren van interacties met uw geliefden, vrienden en familie.',
    'application_og_title' => 'Bouw betere relaties met uw dierbaren. Gratis Online CRM voor vrienden en familie.',

    'markdown_description' => 'Wilt u uw tekst opmaken op een leuke manier? Wij ondersteunen Markdown om vet, cursief, lijsten en meer toe te voegen.',
    'markdown_link' => 'Lees documentatie',

    'header_settings_link' => 'Instellingen',
    'header_logout_link' => 'Uitloggen',
    'header_changelog_link' => 'Productwijzigingen',

    'main_nav_cta' => 'Personen toevoegen',
    'main_nav_dashboard' => 'Dashboard',
    'main_nav_family' => 'Contacten',
    'main_nav_journal' => 'Dagboek',
    'main_nav_activities' => 'Activiteiten',
    'main_nav_tasks' => 'Taken',

    'footer_remarks' => 'Eventuele opmerkingen?',
    'footer_send_email' => 'Stuur me een e-mail',
    'footer_privacy' => 'Privacy beleid',
    'footer_release' => 'Releaseopmerkingen',
    'footer_newsletter' => 'Nieuwsbrief',
    'footer_source_code' => 'Bijdragen',
    'footer_version' => 'Versie: :version',
    'footer_new_version' => 'Er is een nieuwe versie beschikbaar',

    'footer_modal_version_whats_new' => 'Wat is er nieuw',
    'footer_modal_version_release_away' => 'Je loopt 1 versie achter op de laatst beschikbare versie. Je zou je applicatie moeten bijwerken.|Je loopt :number versies achter op de laatst beschikbare versie. Je zou je applicatie moeten bijwerken.',

    'breadcrumb_dashboard' => 'Dashboard',
    'breadcrumb_list_contacts' => 'Lijst van mensen',
    'breadcrumb_archived_contacts' => 'Archived contacts',
    'breadcrumb_journal' => 'Dagboek',
    'breadcrumb_settings' => 'Instellingen',
    'breadcrumb_settings_export' => 'Exporteren',
    'breadcrumb_settings_users' => 'Gebruikers',
    'breadcrumb_settings_users_add' => 'Gebruiker toevoegen',
    'breadcrumb_settings_subscriptions' => 'Abonnement',
    'breadcrumb_settings_import' => 'Importeren',
    'breadcrumb_settings_import_report' => 'Importrapport',
    'breadcrumb_settings_import_upload' => 'Uploaden',
    'breadcrumb_settings_tags' => 'Labels',
    'breadcrumb_add_significant_other' => 'Partner toevoegen',
    'breadcrumb_edit_significant_other' => 'Partner bewerken',
    'breadcrumb_add_note' => 'Notitie toevoegen',
    'breadcrumb_edit_note' => 'Notitie bewerken',
    'breadcrumb_api' => 'API',
    'breadcrumb_edit_introductions' => 'Hoe hebben jullie elkaar ontmoet',
    'breadcrumb_settings_personalization' => 'Personalisatie',
    'breadcrumb_settings_security' => 'Beveiliging',
    'breadcrumb_settings_security_2fa' => 'Tweestapsverificatie',
    'breadcrumb_profile' => 'Profiel van :name',

    'gender_male' => 'Man',
    'gender_female' => 'Vrouw',
    'gender_none' => 'Zeg ik liever niet',

    'error_title' => 'Oeps! Er is iets misgegaan.',
    'error_unauthorized' => 'Je hebt niet de rechten om dit onderdeel te bewerken.',
    'error_save' => 'Er is een fout opgetreden bij het opslaan van de gegevens.',
    'error_try_again' => 'Er ging iets mis. Probeer opnieuw.',
    'error_id' => 'Fout-ID: :id',
    'error_unavailable' => 'Service niet beschikbaar',
    'error_maintenance' => 'Onderhoud in uitvoering. Zo terug.',
    'error_help' => 'We zijn zo terug.',
    'error_twitter' => 'Volg <a href="https://twitter.com/:twitter">ons Twitter account</a> als je gewaarschuwd wilt worden als we terug zijn.',

    'default_save_success' => 'De gegevens zijn opgeslagen.',

    'compliance_title' => 'Sorry voor de onderbreking.',
    'compliance_desc' => 'We hebben onze <a href=":urlterm" hreflang=":hreflang">gebruiksvoorwaarden </a> en <a href=":url" hreflang=":hreflang">privacybeleid</a> aangepast. We zijn verplicht u te vragen deze opnieuw te lezen en goed te keuren om uw account te kunnen blijven gebruiken.',
    'compliance_desc_end' => 'Wij doen niets vervelends met uw gegevens of account en zullen dit ook nooit doen.',
    'compliance_terms' => 'Accepteer de nieuwe voorwaarden en privacybeleid',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => 'Liefdesrelaties',
    'relationship_type_group_family' => 'Familierelaties',
    'relationship_type_group_friend' => 'Vriendschappen',
    'relationship_type_group_work' => 'Collega\'s',
    'relationship_type_group_other' => 'Andere relaties',

    'relationship_type_partner' => 'partner',
    'relationship_type_partner_female' => 'partner',
    'relationship_type_partner_with_name' => ':name\'s van partner',
    'relationship_type_partner_female_with_name' => ':name’s van partner',

    'relationship_type_spouse' => 'echtgenoot',
    'relationship_type_spouse_female' => 'echtgenoot',
    'relationship_type_spouse_with_name' => ':name’s van echtgeno(o)t(e)',
    'relationship_type_spouse_female_with_name' => ':name’s van echtgeno(o)t(e)',

    'relationship_type_date' => 'date',
    'relationship_type_date_female' => 'date',
    'relationship_type_date_with_name' => ':name’s date',
    'relationship_type_date_female_with_name' => ':name\'s date',

    'relationship_type_lover' => 'geliefde',
    'relationship_type_lover_female' => 'geliefde',
    'relationship_type_lover_with_name' => ':name’s geliefde',
    'relationship_type_lover_female_with_name' => ':name’s geliefde',

    'relationship_type_inlovewith' => 'verliefd op',
    'relationship_type_inlovewith_female' => 'verliefd op',
    'relationship_type_inlovewith_with_name' => 'iemand :name is verliefd op',
    'relationship_type_inlovewith_female_with_name' => 'iemand :name is verliefd op',

    'relationship_type_lovedby' => 'begeert door',
    'relationship_type_lovedby_female' => 'begeert door',
    'relationship_type_lovedby_with_name' => ':name’s geheime minnaar',
    'relationship_type_lovedby_female_with_name' => ':name’s geheime minnaar',

    'relationship_type_ex' => 'ex-vriendje',
    'relationship_type_ex_female' => 'ex-vriendin',
    'relationship_type_ex_with_name' => ':name’s ex-vriendje',
    'relationship_type_ex_female_with_name' => ':name’s ex-vriendinnetje',

    'relationship_type_parent' => 'vader',
    'relationship_type_parent_female' => 'moeder',
    'relationship_type_parent_with_name' => ':name’s vader',
    'relationship_type_parent_female_with_name' => ':name’s moeder',

    'relationship_type_child' => 'zoon',
    'relationship_type_child_female' => 'dochter',
    'relationship_type_child_with_name' => ':name’s zoon',
    'relationship_type_child_female_with_name' => ':name’s dochter',

    'relationship_type_sibling' => 'broer',
    'relationship_type_sibling_female' => 'zus',
    'relationship_type_sibling_with_name' => ':name’s broer',
    'relationship_type_sibling_female_with_name' => ':name’s zus',

    'relationship_type_grandparent' => 'grootouder',
    'relationship_type_grandparent_female' => 'grootouder',
    'relationship_type_grandparent_with_name' => ':name’s grootouder',
    'relationship_type_grandparent_female_with_name' => ':name’s grootouder',

    'relationship_type_grandchild' => 'kleinkind',
    'relationship_type_grandchild_female' => 'kleinkind',
    'relationship_type_grandchild_with_name' => ':name’s kleinkind',
    'relationship_type_grandchild_female_with_name' => ':name’s kleinkind',

    'relationship_type_uncle' => 'oom',
    'relationship_type_uncle_female' => 'tante',
    'relationship_type_uncle_with_name' => ':name’s oom',
    'relationship_type_uncle_female_with_name' => ':name’s tante',

    'relationship_type_nephew' => 'neef',
    'relationship_type_nephew_female' => 'nicht',
    'relationship_type_nephew_with_name' => ':name’s neef',
    'relationship_type_nephew_female_with_name' => ':name’s nicht',

    'relationship_type_cousin' => 'neef',
    'relationship_type_cousin_female' => 'neef',
    'relationship_type_cousin_with_name' => ':name’s neef',
    'relationship_type_cousin_female_with_name' => ':name’s neef',

    'relationship_type_godfather' => 'peetoom',
    'relationship_type_godfather_female' => 'peet moeder',
    'relationship_type_godfather_with_name' => ':name\'s peetvader',
    'relationship_type_godfather_female_with_name' => ':name\'s peetmoeder',

    'relationship_type_godson' => 'peetzoon',
    'relationship_type_godson_female' => 'peetdochter',
    'relationship_type_godson_with_name' => ':name\'s schoonzoon',
    'relationship_type_godson_female_with_name' => ':name\'s schoondochter',

    'relationship_type_friend' => 'vriend',
    'relationship_type_friend_female' => 'vriend',
    'relationship_type_friend_with_name' => ':name’s vriend',
    'relationship_type_friend_female_with_name' => ':name’s vriend',

    'relationship_type_bestfriend' => 'beste Vriend',
    'relationship_type_bestfriend_female' => 'beste Vriend',
    'relationship_type_bestfriend_with_name' => ':name’s beste vriend',
    'relationship_type_bestfriend_female_with_name' => ':name’s beste vriend',

    'relationship_type_colleague' => 'collega',
    'relationship_type_colleague_female' => 'collega',
    'relationship_type_colleague_with_name' => ':name’s collega',
    'relationship_type_colleague_female_with_name' => ':name’s collega',

    'relationship_type_boss' => 'baas',
    'relationship_type_boss_female' => 'baas',
    'relationship_type_boss_with_name' => ':name’s baas',
    'relationship_type_boss_female_with_name' => ':name’s baas',

    'relationship_type_subordinate' => 'ondergeschikte',
    'relationship_type_subordinate_female' => 'ondergeschikte',
    'relationship_type_subordinate_with_name' => ':name’s ondergeschikte',
    'relationship_type_subordinate_female_with_name' => ':name’s ondergeschikte',

    'relationship_type_mentor' => 'mentor',
    'relationship_type_mentor_female' => 'mentor',
    'relationship_type_mentor_with_name' => ':name’s mentor',
    'relationship_type_mentor_female_with_name' => ':name’s mentor',

    'relationship_type_protege' => 'protege',
    'relationship_type_protege_female' => 'protege',
    'relationship_type_protege_with_name' => ':name’s protege',
    'relationship_type_protege_female_with_name' => ':name\'s protege',

    'relationship_type_ex_husband' => 'ex-echtgenoot',
    'relationship_type_ex_husband_female' => 'ex-vrouw',
    'relationship_type_ex_husband_with_name' => ':name’s ex echtgenoot',
    'relationship_type_ex_husband_female_with_name' => ':name’s ex-vrouw',

    // emotions
    'emotion_primary_love' => 'Love',
    'emotion_primary_joy' => 'Joy',
    'emotion_primary_surprise' => 'Surprise',
    'emotion_primary_anger' => 'Anger',
    'emotion_primary_sadness' => 'Sadness',
    'emotion_primary_fear' => 'Fear',

    'emotion_secondary_affection' => 'Affection',
    'emotion_secondary_lust' => 'Lust',
    'emotion_secondary_longing' => 'Longing',
    'emotion_secondary_cheerfulness' => 'Cheerfulness',
    'emotion_secondary_zest' => 'Zest',
    'emotion_secondary_contentment' => 'Contentment',
    'emotion_secondary_optimism' => 'Optimism',
    'emotion_secondary_enthrallment' => 'Enthrallment',
    'emotion_secondary_relief' => 'Relief',
    'emotion_secondary_surprise' => 'Surprise',
    'emotion_secondary_irritation' => 'Irritation',
    'emotion_secondary_exasperation' => 'Exasperation',
    'emotion_secondary_rage' => 'Rage',
    'emotion_secondary_disgust' => 'Disgust',
    'emotion_secondary_envy' => 'Envy',
    'emotion_secondary_suffering' => 'Suffering',
    'emotion_secondary_sadness' => 'Sadness',
    'emotion_secondary_disappointment' => 'Disappointment',
    'emotion_secondary_shame' => 'Shame',
    'emotion_secondary_neglect' => 'Neglect',
    'emotion_secondary_sympathy' => 'Sympathy',
    'emotion_secondary_horror' => 'Horror',
    'emotion_secondary_nervousness' => 'Nervousness',

    'emotion_adoration' => 'Adoration',
    'emotion_affection' => 'Affection',
    'emotion_love' => 'Love',
    'emotion_fondness' => 'Fondness',
    'emotion_liking' => 'Liking',
    'emotion_attraction' => 'Attraction',
    'emotion_caring' => 'Caring',
    'emotion_tenderness' => 'Tenderness',
    'emotion_compassion' => 'Compassion',
    'emotion_sentimentality' => 'Sentimentality',
    'emotion_arousal' => 'Arousal',
    'emotion_desire' => 'Desire',
    'emotion_lust' => 'Lust',
    'emotion_passion' => 'Passion',
    'emotion_infatuation' => 'Infatuation',
    'emotion_longing' => 'Longing',
    'emotion_amusement' => 'Amusement',
    'emotion_bliss' => 'Bliss',
    'emotion_cheerfulness' => 'Cheerfulness',
    'emotion_gaiety' => 'Gaiety',
    'emotion_glee' => 'Glee',
    'emotion_jolliness' => 'Jolliness',
    'emotion_joviality' => 'Joviality',
    'emotion_joy' => 'Joy',
    'emotion_delight' => 'Delight',
    'emotion_enjoyment' => 'Enjoyment',
    'emotion_gladness' => 'Gladness',
    'emotion_happiness' => 'Happiness',
    'emotion_jubilation' => 'Jubilation',
    'emotion_elation' => 'Elation',
    'emotion_satisfaction' => 'Satisfaction',
    'emotion_ecstasy' => 'Ecstasy',
    'emotion_euphoria' => 'Euphoria',
    'emotion_enthusiasm' => 'Enthusiasm',
    'emotion_zeal' => 'Zeal',
    'emotion_zest' => 'Zest',
    'emotion_excitement' => 'Excitement',
    'emotion_thrill' => 'Thrill',
    'emotion_exhilaration' => 'Exhilaration',
    'emotion_contentment' => 'Contentment',
    'emotion_pleasure' => 'Pleasure',
    'emotion_pride' => 'Pride',
    'emotion_eagerness' => 'Eagerness',
    'emotion_hope' => 'Hope',
    'emotion_optimism' => 'optimism',
    'emotion_enthrallment' => 'Enthrallment',
    'emotion_rapture' => 'Rapture',
    'emotion_relief' => 'Relief',
    'emotion_amazement' => 'Amazement',
    'emotion_surprise' => 'Surprise',
    'emotion_astonishment' => 'Astonishment',
    'emotion_aggravation' => 'Aggravation',
    'emotion_irritation' => 'Irritation',
    'emotion_agitation' => 'Agitation',
    'emotion_annoyance' => 'Annoyance',
    'emotion_grouchiness' => 'Grouchiness',
    'emotion_grumpiness' => 'Grumpiness',
    'emotion_exasperation' => 'Exasperation',
    'emotion_frustration' => 'Frustration',
    'emotion_anger' => 'Anger',
    'emotion_rage' => 'Rage',
    'emotion_outrage' => 'Outrage',
    'emotion_fury' => 'Fury',
    'emotion_wrath' => 'Wrath',
    'emotion_hostility' => 'Hostility',
    'emotion_ferocity' => 'Ferocity',
    'emotion_bitterness' => 'Bitterness',
    'emotion_hate' => 'Hate',
    'emotion_loathing' => 'Loathing',
    'emotion_scorn' => 'Scorn',
    'emotion_spite' => 'Spite',
    'emotion_vengefulness' => 'Vengefulness',
    'emotion_dislike' => 'Dislike',
    'emotion_resentment' => 'Resentment',
    'emotion_disgust' => 'Disgust',
    'emotion_revulsion' => 'Revulsion',
    'emotion_contempt' => 'Contempt',
    'emotion_envy' => 'Envy',
    'emotion_jealousy' => 'Jealousy',
    'emotion_agony' => 'Agony',
    'emotion_suffering' => 'Suffering',
    'emotion_hurt' => 'Hurt',
    'emotion_anguish' => 'Anguish',
    'emotion_depression' => 'Depression',
    'emotion_despair' => 'Despair',
    'emotion_hopelessness' => 'Hopelessness',
    'emotion_gloom' => 'Gloom',
    'emotion_glumness' => 'Glumness',
    'emotion_sadness' => 'Sadness',
    'emotion_unhappiness' => 'Unhappiness',
    'emotion_grief' => 'Grief',
    'emotion_sorrow' => 'Sorrow',
    'emotion_woe' => 'Woe',
    'emotion_misery' => 'Misery',
    'emotion_melancholy' => 'Melancholy',
    'emotion_dismay' => 'Dismay',
    'emotion_disappointment' => 'Disappointment',
    'emotion_displeasure' => 'Displeasure',
    'emotion_guilt' => 'Guilt',
    'emotion_shame' => 'Shame',
    'emotion_regret' => 'Regret',
    'emotion_remorse' => 'Remorse',
    'emotion_alienation' => 'Alienation',
    'emotion_isolation' => 'Isolation',
    'emotion_neglect' => 'Neglect',
    'emotion_loneliness' => 'Loneliness',
    'emotion_rejection' => 'Rejection',
    'emotion_homesickness' => 'Homesickness',
    'emotion_defeat' => 'Defeat',
    'emotion_dejection' => 'Dejection',
    'emotion_insecurity' => 'Insecurity',
    'emotion_embarrassment' => 'Embarrassment',
    'emotion_humiliation' => 'Humiliation',
    'emotion_insult' => 'Insult',
    'emotion_pity' => 'Pity',
    'emotion_sympathy' => 'Sympathy',
    'emotion_alarm' => 'Alarm',
    'emotion_shock' => 'Shock',
    'emotion_fear' => 'Fear',
    'emotion_fright' => 'Fright',
    'emotion_horror' => 'Horror',
    'emotion_terror' => 'Terror',
    'emotion_panic' => 'Panic',
    'emotion_hysteria' => 'Hysteria',
    'emotion_mortification' => 'Mortification',
    'emotion_anxiety' => 'Anxiety',
    'emotion_nervousness' => 'Nervousness',
    'emotion_tenseness' => 'Tenseness',
    'emotion_uneasiness' => 'Uneasiness',
    'emotion_apprehension' => 'Apprehension',
    'emotion_worry' => 'Worry',
    'emotion_distress' => 'Distress',
    'emotion_dread' => 'Dread',
];
