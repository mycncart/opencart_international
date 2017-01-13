<?php
/**
 * @version		$Id: amazon_login_pay.php 4564 2016-12-01 13:12:47Z mic $
 * @package		Language Translation German Backend
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

//Headings
$_['heading_title']				= 'Anmelden und Bezahlen mit Amazon (nur US)';

// Text
$_['text_success']				= 'Datensatz erfolgreich gespeichert';
$_['text_ipn_url']				= 'Cron Job URL';
$_['text_ipn_token']			= 'Geheimbegriff';
$_['text_us']					= 'US-Englisch';
$_['text_de']					= 'Deutsch';
$_['text_uk']					= 'UK-Englisch';
$_['text_fr']					= 'Französisch';
$_['text_it']					= 'Italienisch';
$_['text_es']					= 'Spanisch';
$_['text_us_region']			= 'USA';
$_['text_eu_region']			= 'EU';
$_['text_uk_region']			= 'UK';
$_['text_live']					= 'Live';
$_['text_sandbox']				= 'Sandbox';
$_['text_auth']					= 'Genehmigung';
$_['text_extension']			= 'Erweiterungen';
$_['text_account']				= 'Konto';
$_['text_guest']				= 'Gast';
$_['text_no_capture']			= '--- Kein autom. Übernahme ---';
$_['text_all_geo_zones']		= 'Alle Geozonen';
$_['text_button_settings']		= 'Checkout-Button Einstellungen';
$_['text_colour']				= 'Farbe';
$_['text_orange']				= 'Orange';
$_['text_tan']					= 'Braun';
$_['text_white']				= 'Weiß';
$_['text_light']				= 'Hell';
$_['text_dark']					= 'Dunkel';
$_['text_size']					= 'Größe';
$_['text_medium']				= 'Mittel';
$_['text_large']				= 'Groß';
$_['text_x_large']				= 'Extragroß';
$_['text_background']			= 'Hintergrund';
$_['text_edit']					= 'Bearbeiten';
$_['text_amazon_login_pay']		= '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Sign-up to Login and Pay with Amazon"><img src="view/image/payment/amazon.png" alt="Login and Pay with Amazon" title="Login and Pay with Amazon" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join']			= '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Sign-up to Login and Pay with Amazon"><u>Sign-up to Login and Pay with Amazon</u></a>';
$_['text_payment_info']			= 'Zahlarteninfo';
$_['text_capture_ok']			= 'Übernahme erfolgreich';
$_['text_capture_ok_order']		= 'Übernahme erfolgreich, Genehmigung komplett erteilt';
$_['text_refund_ok']			= 'Rückzahlung erfolgriech angefordert';
$_['text_refund_ok_order']		= 'Rückzahlung erfolgriech angefordert, Betrag vollständig retourniert';
$_['text_cancel_ok']			= 'Abbruch erfolgreich, Auftragsstatus aktualisiert';
$_['text_capture_status']		= 'Zahlung übernommen';
$_['text_cancel_status']		= 'Zahlung abgebrochen';
$_['text_refund_status']		= 'Zahlung retourniert';
$_['text_order_ref']			= 'Auftragsnr.';
$_['text_order_total']			= 'Gesamtbetrag genehmigt';
$_['text_total_captured']		= 'Gesamtbetrag übernommen';
$_['text_transactions']			= 'Transaktionen';
$_['text_column_authorization_id']	= 'Amazon Genehmigungsnr.';
$_['text_column_capture_id']	= 'Amazon Übernahmenr.';
$_['text_column_refund_id']		= 'Amazon Rückzahlungsnr.';
$_['text_column_amount']		= 'Betrag';
$_['text_column_type']			= 'Art';
$_['text_column_status']		= 'Status';
$_['text_column_date_added']	= 'Erstellt';
$_['text_confirm_cancel']		= 'Sicher diese Zahlung abbrechen?';
$_['text_confirm_capture']		= 'Sicher die Zahlung übernehmen?';
$_['text_confirm_refund']		= 'Sicher die Rückzahlung veranlassen?';
$_['text_minimum_total']		= 'Mindest Gesamtbetrag';
$_['text_geo_zone']				= 'Geozone';
$_['text_status']				= 'Status';
$_['text_declined_codes']		= 'Test Ablehnungscodes';
$_['text_sort_order']			= 'Reihenfolge';
$_['text_amazon_invalid']		= 'Ungültige Zahlungsart';
$_['text_amazon_rejected']		= 'Von Amazon zurückgewiesen';
$_['text_amazon_timeout']		= 'Transaktion Zeitüberschreitung';
$_['text_amazon_no_declined']	= '--- Keine autom. Absagen ---';
$_['text_amazon_signup']		= 'Anmelden zu Anmelden &amp; Bezahlen mit Amazon';
$_['text_credentials']			= 'Hier die Schlüssel einfügen (in JSON Format)';
$_['text_validate_credentials']	= 'Genehmigungs- &amp; Verwendungsangaben';
	// old
$_['text_payment']				= 'Zahlung';

// Columns
$_['column_status']				= 'Status';

//entry
$_['entry_merchant_id']			= 'Händlernr.';
$_['entry_access_key']			= 'Zugriffsschlüssel';
$_['entry_access_secret']		= 'Geheimschlüssel';
$_['entry_client_id']			= 'Kundennr.';
$_['entry_client_secret']		= 'Kunden Geheimbegriff';
$_['entry_language']			= 'Sprache';
$_['entry_login_pay_test']		= 'Testmodus';
$_['entry_login_pay_mode']		= 'Zahlungsmodus';
$_['entry_checkout']			= 'Kassamodus';
$_['entry_payment_region']		= 'Zahlungsland';
$_['entry_capture_status']		= 'Status autom. Übernahme';
$_['entry_pending_status']		= 'Status in Bearbeitung';
$_['entry_ipn_url']				= 'IPN URL';
$_['entry_ipn_token']			= 'Geheimbegriff';
$_['entry_debug']				= 'Berichte';

// Help
$_['help_pay_mode']				= 'Zahlungsart nur für amerikanischen Markt möglich';
$_['help_checkout']				= 'Soll Zahlungsbutton gleichzeitig Kunde anmelden';
$_['help_capture_status']		= 'Den Auftragsstatus auswählen welcher eine automatische Übernahme einer genehmigten Zahlung auslöst';
$_['help_ipn_url']				= 'In Amazon Seller Central als Händler-URL definieren';
$_['help_ipn_token']			= 'So lang wie möglich';
$_['help_minimum_total']		= 'Muss größer als 0 sein';
$_['help_debug']				= 'Aktive Berichte speichern auch sensible Daten. Nur aktivieren wenn unbedingt notwendig';
$_['help_declined_codes']		= 'Nur für Testzwecke';

// Order Info
$_['tab_order_adjustment']		= 'Auftragsbearbeitung';

// Errors
$_['error_permission']			= 'Keine Rechte zum Bearbeiten';
$_['error_merchant_id']			= 'Händlernummer ist erforderlich';
$_['error_access_key']			= 'Zugriffsschlüssel ist erforderlich';
$_['error_access_secret']		= 'Geheimschlüssel ist erforderlich';
$_['error_client_id']			= 'Kundennummer ist erforderlich';
$_['error_client_secret']		= 'Kundengeheimnummer ist erforderlich';
$_['error_pay_mode']			= 'Zahlungsart ist nur für amerikanischen Markt möglich';
$_['error_minimum_total']		= 'Mindestbetrag Warenkorb muss größer als 0 (Null) sein';
$_['error_curreny']				= 'Der Shop muss %s Währung installiert und aktiviert haben';
$_['error_upload']				= 'Upload fehlgeschlagen';
$_['error_data_missing']		= 'Erforderliche Daten fehlen';
$_['error_credentials']			= 'Schlüsel muss in gültigem JSON-Format angegeben werden';

// Buttons
$_['button_capture']			= 'Übernehmen';
$_['button_refund']				= 'Rückzahlung';
$_['button_cancel']				= 'Abbrechen';