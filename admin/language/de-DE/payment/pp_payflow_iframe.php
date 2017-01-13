<?php
/**
 * @version		$Id: pp_payflow_iframe.php 4343 2016-06-01 10:18:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']				= 'PayPal Payflow Pro iFrame';
$_['heading_refund']			= 'Rückerstattung';

// Text
$_['text_payment']				= 'Zahlung';
$_['text_success']				= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']					= 'Bearbeiten';
$_['text_pp_payflow_iframe']	= '<a target="_blank" href="https://www.paypal.com/uk/mrb/pal=V4T754QB63XXL"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro" title="PayPal Website Payment Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']		= 'Genehmigung';
$_['text_sale']					= 'Verkauf';
$_['text_authorise']			= 'Genehmigen';
$_['text_capture']				= 'Verzögerte Erfassung';
$_['text_void']					= 'Ungültig';
$_['text_payment_info']			= 'Zahlungsinformation';
$_['text_complete']				= 'Komplett';
$_['text_incomplete']			= 'Unvollständig';
$_['text_transaction']			= 'Transaktion';
$_['text_confirm_void']			= 'Wenn ungültig kann kein weiterer Betrag erfasst werden';
$_['text_refund']				= 'Rückerstattung';
$_['text_refund_issued']		= 'Rückerstattung erfolgreich';
$_['text_redirect']				= 'Umleitung';
$_['text_iframe']				= 'Iframe';
$_['help_checkout_method']		= 'Weiterleitungmethode verwenden wenn man entweder selber kein SSL besitzt oder die "Zahlen mit PayPal" Option auf der gehosteten Zahlungsseite deaktiviert hat';

// Column
$_['column_transaction_id']		= 'Transaktionsnr.';
$_['column_transaction_type']	= 'Transaktionsart';
$_['column_amount']				= 'Betrag';
$_['column_time']				= 'Zeit';
$_['column_actions']			= 'Aktionen';

// Tab
$_['tab_settings']				= 'Einstellungen';
$_['tab_order_status']			= 'Auftragsstatus';
$_['tab_checkout_customisation']= 'Checkout Anpassen';

// Entry
$_['entry_vendor']				= 'Händlernr.';
$_['entry_user']				= 'Benutzer';
$_['entry_password']			= 'Passwort';
$_['entry_partner']				= 'Partner';
$_['entry_test']				= 'Testmodus';
$_['entry_transaction']			= 'Transaktionsart';
$_['entry_total']				= 'Gesamt';
$_['entry_order_status']		= 'Auftragsstatus';
$_['entry_geo_zone']			= 'Geozone';
$_['entry_status']				= 'Status';
$_['entry_sort_order']			= 'Reihenfolge';
$_['entry_transaction_id']		= 'Transaktionsnr.';
$_['entry_full_refund']			= 'Volle Rückzahlung';
$_['entry_amount']				= 'Betrag';
$_['entry_message']				= 'Nachricht';
$_['entry_ipn_url']				= 'IPN URL';
$_['entry_checkout_method']		= 'Checkout Methode';
$_['entry_debug']				= 'Debugmodus';
$_['entry_transaction_reference']	= 'Transaktionsreferenz';
$_['entry_transaction_amount']		= 'Transaktionsbetrag';
$_['entry_refund_amount']			= 'Betrag Rückerstattung';
$_['entry_capture_status']			= 'Erfassungsstatus';
$_['entry_void']					= 'Ungültig';
$_['entry_capture']					= 'Erfasse';
$_['entry_transactions']			= 'Transaktionen';
$_['entry_complete_capture']		= 'Vollständige Erfassung';
$_['entry_canceled_reversal_status']= 'Status Abgebrochene Stornierung';
$_['entry_completed_status']		= 'Status Komplett';
$_['entry_denied_status']			= 'Status Abgelehnt';
$_['entry_expired_status']			= 'Status Abgelaufen';
$_['entry_failed_status']			= 'Status Fehlerhaft';
$_['entry_pending_status']			= 'Status Wartestellung';
$_['entry_processed_status']		= 'Status in Arbeit';
$_['entry_refunded_status']			= 'Status Rückerstattet';
$_['entry_reversed_status']			= 'Status Umgekehrt';
$_['entry_voided_status']			= 'Status Ungültig';
$_['entry_cancel_url']				= 'URL Abbruch';
$_['entry_error_url']				= 'URL Fehler';
$_['entry_return_url']				= 'URL Zurück';
$_['entry_post_url']				= 'URL POST-Daten';

// Help
$_['help_vendor']				= 'Anmeldedetails für Payments Pro';
$_['help_user']					= 'Wurden mehrere Benutzer für Genehmigungen angelegt dann einen dieser hier einsetzen ansonsten die eigene Händlernummer';
$_['help_password']				= 'Das 6 bis 32 stellige Passwort welches bei Registrierung verwendet wurde';
$_['help_partner']				= 'Entweder die Nummer des partners der die Registrierung vorgenommen hat oder wenn direkt bei PayPal angemeldet wurde dann diese anwenden';
$_['help_test']					= 'Verwende Geschäfts- oder Testadresse (Sandbox) für Gateway?<br />Testmodus kann in MSIE nicht funktionieren';
$_['help_total']				= 'Gesamtbruttobestellsumme im Warenkorb welche erreicht werden muss damit diese Zahlunsgart angewendet wird';
$_['help_debug']				= 'Zeichne weitere Infos auf?';

// Button
$_['button_refund']				= 'Rückerstattung';
$_['button_void']				= 'Ungültig';
$_['button_capture']			= 'Erfassung';

// Error
$_['error_permission']		= 'Keine Rechte für diese Aktion';
$_['error_vendor']			= 'Anbieter erforderlich';
$_['error_user']			= 'Benutzer erforderlich';
$_['error_password']		= 'Passwort erforderlich';
$_['error_partner']			= 'Partner erforderlich';
$_['error_missing_data']	= 'Es fehlen noch Daten';
$_['error_missing_order']	= 'Kann den Auftrag nicht finden';
$_['error_general']			= 'Allgemeiner Fehler';
$_['error_capture_amt']		= 'Betrag zum Erfassen angeben'; // OC < 2.2
$_['error_capture']			= 'Betrag zum Erfassen angeben';