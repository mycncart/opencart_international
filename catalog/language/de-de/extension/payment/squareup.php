<?php
// Text
$_['text_new_card']						= '+ neue Karte';
$_['text_loading']						= 'Lade .. bitte warten ..';
$_['text_card_details']					= 'Kartendetails';
$_['text_saved_card']					= 'Gespeicherte Karten';
$_['text_card_ends_in']					= 'Bezahlen mit vorhandener Karte %s, endet auf xxxx xxxx xxxx %s';
$_['text_card_number']					= 'Kartennummer';
$_['text_card_expiry']					= 'Gültig bis (MM/JJ):';
$_['text_card_cvc']						= 'Sicherheitscode (CVC)';
$_['text_card_zip']						= 'Postleitzahl';
$_['text_card_save']					= 'Karte speichern für weitere Verwendungen?';
$_['text_trial']						= '%s jede/n %s %s für %s Zahlungen, dann  ';
$_['text_recurring']					= '%s jede/n %s %s';
$_['text_length']						= ' für %s Zahlungen';
$_['text_cron_subject']					= 'Square Cronjob Zusammenfassung';
$_['text_cron_message']					= 'Übersicht alle durchgeführten Cronjobs für Square:';
$_['text_squareup_profile_suspended']	= ' Abozahlung wurde ausgesetzt - bitte uns kontaktieren.';
$_['text_squareup_trial_expired']		= ' Testphase ist abgelaufen.';
$_['text_squareup_recurring_expired']	= ' Abozahlungen sind abgelaufen - dies war die letzte Zahlung.';
$_['text_cron_summary_token_heading']	= 'Zugriffstoken aktualisieren:';
$_['text_cron_summary_token_updated']	= 'Zugriffstoken erfolgreich aktualisiert.';
$_['text_cron_summary_error_heading']	= 'Transaktionsfehler:';
$_['text_cron_summary_fail_heading']	= 'Fehlgeschlagenen Transaktionen (Profile ausgesetzt):';
$_['text_cron_summary_success_heading']	= 'Erfolgreiche Transaktionen:';
$_['text_cron_fail_charge']				= 'Profil <strong>#%s</strong> konnte nicht mit <strong>%s</strong> verrechnet werden';
$_['text_cron_success_charge']			= 'Profil <strong>#%s</strong> erfolgreich mit <strong>%s</strong> verrechnet';
$_['text_card_placeholder']				= 'XXXX XXXX XXXX XXXX';
$_['text_cvv']							= 'CVV';
$_['text_expiry']						= 'MM/JJ';
$_['text_default_squareup_name']		= 'Kreditkarte';
$_['text_token_issue_customer_error']	= 'Leider sind technische Probleme aufgetreten - bitte später nochmal probieren.';
$_['text_token_revoked_subject']		= 'Der Squarezugriff wurde ausgesetzt!';
$_['text_token_revoked_message']		= 'Der Zugriff auf die Squareerweiterung wurde im Squarekonto ausgesetzt. Bitte in den Erweiterungseinstellungen die Daten überprüfen und nochmal verbinden';
$_['text_token_expired_subject']		= 'Der Squarezugriff ist abgelaufen';
$_['text_token_expired_message']		= 'Der Zugriff auf die Squareerweiterung ist abgelaufen. Bitte die Einstellungen sowie Cronjob überpürfen und nochmal verbinden';

// Error
$_['error_browser_not_supported']		= 'Das Zahlungssystem untertützt diesen Browser nicht. Bitte aktualisieren oder anderen verwenden';
$_['error_card_invalid']				= 'Karte ist nicht gültig';
$_['error_squareup_cron_token']			= 'Zugriff konnte nicht aktualisiert werden. Bitte die Zahlart in den Einstellungen nochmal verbinden';

// Warning
$_['warning_test_mode']					= 'Hinweis: Testmodus (Sandbox) aktuell aktiv! Transaktionen werden nur simuliert';

// Statuses
$_['squareup_status_comment_authorized']	= 'Transaktion wurde genehmigt, aber noch nicht übernommen';
$_['squareup_status_comment_captured']		= 'Transaktion wurde genehmigt und nachträglich übernommen';
$_['squareup_status_comment_voided']		= 'Transaktion wurde genehmigt und nachträglich aufgehoben (z.B. storniert';
$_['squareup_status_comment_failed']		= 'Transaktion ist fehlgeschlagen';

// Override errors
$_['squareup_override_error_billing_address.country']	= 'Land Zahlungsadresse ist nicht gültig - bitte ändern und nochmal probieren';
$_['squareup_override_error_shipping_address.country']	= 'Land Zustelladresse ist nicht richtig - bitte ändern und nochmal probieren';
$_['squareup_override_error_email_address']				= 'Emailadresse ist nicht richtig - bitte ändern und nochmal probieren';
$_['squareup_override_error_phone_number']				= 'Telefonnummer ist nicht richtig - bitte ändern und nochmal probieren';
$_['squareup_error_field']								= ' Feld %s';