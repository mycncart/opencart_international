<?php
/**
 * @version		$Id: amazon_login_pay.php 4343 2016-06-01 10:18:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2015 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

//Headings
$_['heading_title']					= 'Anmelden &amp; Bezahlen mit Amazon';

//Text
$_['text_success']					= 'Modul erfolgreich bearbeitet';
$_['text_ipn_url']					= 'URL für Cronjob';
$_['text_ipn_token']				= 'Geheimbegriff';
$_['text_us']						= 'US';
$_['text_germany']                  = 'Deutschland';
$_['text_uk']                       = 'Grossbritannien';
$_['text_live']                     = 'Live';
$_['text_sandbox']                  = 'Test';
$_['text_auth']						= 'Genehmigung';
$_['text_payment']                  = 'Zahlung';
$_['text_no_capture']               = '-- Keine autom. Übernahme --';
$_['text_all_geo_zones']            = 'Alle Geozonen';
$_['text_button_settings']          = 'Einstellungen Bezahlbutton';
$_['text_colour']                   = 'Farbe';
$_['text_orange']                   = 'Orange';
$_['text_tan']                      = 'Gelbbraun';
$_['text_white']                    = 'Weiß';
$_['text_light']                    = 'Hell';
$_['text_dark']                     = 'Dunkel';
$_['text_size']                     = 'Größe';
$_['text_medium']                   = 'Mittel';
$_['text_large']                    = 'Groß';
$_['text_x_large']                  = 'Extragroß';
$_['text_background']               = 'Hintergrund';
$_['text_edit']						= 'Bearbeiten';
$_['text_amazon_login_pay']         = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Registrieren für Anmeldung &amp; Bezahlung mit Amazon"><img src="view/image/payment/amazon.png" alt="Anmelden und Bezahlen mit Amazon" title="Anmelden und Bezahlen mit Amazon" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join']              = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Registrieren für Anmeldung &amp; Bezahlung mit Amazon"><u>Registrieren für Anmeldung &amp; Bezahlung mit Amazon</u></a>';
$_['entry_login_pay_test']          = 'Testmodus';
$_['entry_login_pay_mode']          = 'Zahlungsmodus';
$_['text_payment_info']				= 'Zahlungsinfo';
$_['text_capture_ok']				= 'Übernahme erfolgreich';
$_['text_capture_ok_order']			= 'Übernahme erfolgreich, Genehmigung erteilt';
$_['text_refund_ok']				= 'Rückerstattung erfolgreich angefordert';
$_['text_refund_ok_order']			= 'Rückerstattung erfolgreich angefordert, Betrag komplett erstattet';
$_['text_cancel_ok']				= 'Storno erfolgreich, Auftragsstatus auf Storno geändert';
$_['text_capture_status']			= 'Zahlung übernommen';
$_['text_cancel_status']			= 'Zahlung abgebrochen';
$_['text_refund_status']			= 'Betrag rückerstattet';
$_['text_order_ref']				= 'Auftragsnr.';
$_['text_order_total']				= 'Gesamtbetrag genehmigt';
$_['text_total_captured']			= 'Gesamtbetrag übernommen';
$_['text_transactions']				= 'Transaktionen';
$_['text_column_authorization_id']	= 'Amazon Genehmigungsnr.';
$_['text_column_capture_id']		= 'Amazon Übernahmenr.';
$_['text_column_refund_id']			= 'Amazon Rückerstattungsnr.';
$_['text_column_amount']			= 'Betrag';
$_['text_column_type']				= 'Art';
$_['text_column_status']			= 'Status';
$_['text_column_date_added']		= 'Hinzugefügt';
$_['text_confirm_cancel']			= 'Sicher diese Zahlung stornieren?';
$_['text_confirm_capture']			= 'Sicher diese Zahlung übernehmen?';
$_['text_confirm_refund']			= 'Sicher den Betrag rückzahlen?';
$_['text_minimum_total']			= 'Mindestbetrag Warenkorb';
$_['text_geo_zone']					= 'Geozone';
$_['text_status']					= 'Status';
$_['text_declined_codes']			= 'Testcodes Ablehnung';
$_['text_sort_order']				= 'Reihenfolge';
$_['text_amazon_invalid']			= 'Ungültige Zahlungsart';
$_['text_amazon_rejected']			= 'Abgelehnt durch Amazon';
$_['text_amazon_timeout']			= 'Transaktionszeit abgelaufen';
$_['text_amazon_no_declined']		= '-- Keine autom. Ablehnung --';

// Columns
$_['column_status']					= 'Status';

//entry
$_['entry_merchant_id']				= 'Händlernr.';
$_['entry_access_key']				= 'Zugriffsschlüssel';
$_['entry_access_secret']			= 'Geheimschlüssel';
$_['entry_client_id']				= 'Kundennr.';
$_['entry_client_secret']			= 'Kundengeheimschlüssel';
$_['entry_marketplace']				= 'Marktplatz';
$_['entry_capture_status']			= 'Automatischer Übernahmestatus';
$_['entry_pending_status']			= 'Auftragsstatus Wartend';
$_['entry_ipn_url']					= 'URL für IPN';
$_['entry_ipn_token']				= 'Geheimbegriff';
$_['entry_debug']					= 'Berichte';


// Help
$_['help_pay_mode']					= 'Zahlung nur für US-Marktplätze möglich';
$_['help_capture_status']			= 'Automatischer Auftragsstatus wenn Zahlung genehmigt';
$_['help_ipn_url']					= 'URL für Amazon Seller Central';
$_['help_ipn_token']				= 'Schwer zu erratender Begriff';
$_['help_debug']					= 'Wenn aktiviert werden diverse Berichte aufgezeichnet';
$_['help_declined_codes']			= 'Nur für Testzwecke';

// Order Info
$_['tab_order_adjustment']			= 'Einstellungen Aufträge';

// Errors
$_['error_permission']				= 'Keine Rechte für diese Aktion';
$_['error_merchant_id']				= 'Händlernr. erforderlich';
$_['error_access_key']				= 'Zugriffsschlüssel erforderlich';
$_['error_access_secret']			= 'Geheimschlüssel erforderlich';
$_['error_client_id']				= 'Kundennr. erforderlich';
$_['error_client_secret']			= 'Kundengeheimschlüssel erforderlich';
$_['error_pay_mode']				= 'Zahlung ist nur für US-Markplätze möglich';
$_['error_curreny']					= 'Shop muss %s Währung(en) installiert und aktiviert haben';
$_['error_upload']					= 'Upload fehlgeschlagen';
$_['error_data_missing']			= 'Erforderliche Daten fehlen';

// Buttons
$_['button_capture']				= 'Übernehmen';
$_['button_refund']					= 'Rückzahlen';
$_['button_cancel']					= 'Abbrechen';