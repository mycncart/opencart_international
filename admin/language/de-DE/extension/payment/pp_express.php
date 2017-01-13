<?php
/**
 * @version		$Id: pp_express.php 4457 2016-10-05 10:04:36Z mic $
 * @package		Language Translation German Backend
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']						= 'PayPal Express';

// Text
$_['text_extension']					= 'Erweiterungen';
$_['text_success']						= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']							= 'Bearbeiten';
$_['text_pp_express']					= '<a href="https://www.paypal.com/at/mrb/pal=BCZYWJHWKF23Y" target="_blank"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']				= 'Genehmigung';
$_['text_sale']							= 'Verkauf';
$_['text_signup']						= 'Anmelden bei PayPal - Einstellungen zuerst speichern da Seite anschließend autom. erneuert wird';
$_['text_sandbox']						= 'Anmelden bei PayPal-Sandbox - Einstellungen zuerst speichern da Seite anschließend autom. erneuert wird';
$_['text_clear']						= 'Löschen';
$_['text_browse']						= 'Einfügen';
$_['text_image_manager']				= 'Bildverwaltung';
$_['text_ipn']							= 'IPN URL';
$_['text_paypal_join']					= 'Bei PayPal anmelden - Einstellungen zuerst speichern!';
$_['text_paypal_join_sandbox']			= 'Bei Sandbox-PayPal anmelden - Einstellungen zuerst speichern!';
	// old
$_['text_payment']						= 'Zahlung';

// Entry
$_['entry_username']					= 'API Benutzername';
$_['entry_password']					= 'API Passwort';
$_['entry_signature']					= 'API Unterschrift';
$_['entry_sandbox_username']			= 'API Sandbox Benutzername';
$_['entry_sandbox_password']			= 'API Sandbox Passwort';
$_['entry_sandbox_signature']			= 'API Sandbox Unterschrift';
$_['entry_ipn']							= 'IPN URL';
$_['entry_test']						= 'Testmodus';
$_['entry_debug']						= 'Berichte aktivieren';
$_['entry_currency']					= 'Standardwährung';
$_['entry_recurring_cancel']			= 'Erlaubt Kunden Abozahlungen zu stornieren';
$_['entry_method']						= 'Transaktionsart';
$_['entry_transaction']					= 'Transaktionsart';
$_['entry_total']						= 'Summe';
$_['entry_geo_zone']					= 'Geozone';
$_['entry_status']						= 'Status';
$_['entry_sort_order']					= 'Reihenfolge';
$_['entry_icon_sort_order']				= 'Icon Reihenfolge';
$_['entry_recurring_cancellation']		= 'Kunden dürfen Abozahlung stornieren';
$_['entry_canceled_reversal_status']	= 'Auftragsstatus Erstattung Abgebrochen';
$_['entry_completed_status']			= 'Status Fertig';
$_['entry_denied_status']				= 'Status Abgelehnt';
$_['entry_expired_status']				= 'Status Abgelaufen';
$_['entry_failed_status']				= 'Status Fehlgeschlagen';
$_['entry_pending_status']				= 'Status Ausstehend';
$_['entry_processed_status']			= 'Status Bearbeitet';
$_['entry_refunded_status']				= 'Status Erstattet';
$_['entry_reversed_status']				= 'Status Gutschrift';
$_['entry_voided_status']				= 'Status Ungültig';
$_['entry_display_checkout']			= 'Zeige Quickcheckout Icon';
$_['entry_allow_notes']					= 'Erlaube Kommentare';
$_['entry_logo']						= 'Logo';
$_['entry_border_colour']               = 'Farbe Kopf Rahmen';
$_['entry_header_colour']               = 'Farbe Kopf Hintergrund';
$_['entry_page_colour']                 = 'Farbe Seite Hintergrund';

// Tab
$_['tab_general']						= 'Allgemein';
$_['tab_api_details']					= 'API Details';
$_['tab_api']							= 'API Details';
$_['tab_order_status']					= 'Auftragsstatus';
$_['tab_checkout']						= 'Bezahlvorgang';

// Help
$_['help_ipn']							= 'Erforderlich für Abozahlungen';
$_['help_total']						= 'Mindestgesamtsumme im Warenkorb damit diese Zahlungsart verfügbar ist';
$_['help_logo']							= 'Max. 750px(B) x 90px(H)<br />Logo sollte nur bei einer https-Verbindung eingesetzt werden';
$_['help_colour']						= '6-stelliger HEX-Code für Farbe (z.B. FF0000 = Rot)';
$_['help_currency']						= 'Anwendung bei Suche in Transaktionen';

// Error
$_['error_permission']					= 'Keine Rechte für diese Aktion';
$_['error_username']					= 'API Benutzername erforderlich!';
$_['error_password']					= 'API Passwort erforderlich!';
$_['error_signature']					= 'API Unterschrift erforderlich!';
$_['error_sandbox_username']	 	 	= 'API Sandbox Benutzername erforderlich!';
$_['error_sandbox_password']		 	= 'API Sandbox Passwort erforderlich!';
$_['error_sandbox_signature']		 	= 'API Sandbox Unterschrift erforderlich!';
$_['error_data']						= 'Keine Daten aus Request';
$_['error_timeout']						= 'Anfragezeit überschritten';
$_['error_api']							= 'Paypal Genehmigungsfehler';
$_['error_api_sandbox']					= 'Paypal Sandbox Genehmigungsfehler';