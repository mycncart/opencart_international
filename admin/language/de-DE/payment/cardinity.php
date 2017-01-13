<?php
/**
 * @version		$Id: cardinity.php 4344 2016-06-01 10:19:06Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2016 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']					= 'Cardinity';

// Text
$_['text_payment']					= 'Zahlung';
$_['text_success']					= 'Einstellungen erfolgreich bearbeitet';
$_['text_edit']                     = 'Bearbeiten';
$_['text_cardinity']				= '<a href="http://cardinity.com/?crdp=opencart" target="_blank"><img src="view/image/payment/cardinity.png" alt="Cardinity" title="Cardinity" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_production']				= 'Live';
$_['text_sandbox']					= 'Test (Sandbox)';
$_['text_payment_info']				= 'Info Rückzahlung';
$_['text_no_refund']				= 'Keine Rückzahlungen';
$_['text_confirm_refund']			= 'Sicher Rückzahlung veranlassen?';
$_['text_na']						= 'k.A.';
$_['text_success_action']			= 'Erfolgreich';
$_['text_error_generic']			= 'Bei der Anfrage trat ein Fehler auf, mehr dazu im Bericht';

// Column
$_['column_refund']					= 'Rückzahlung';
$_['column_date']					= 'Datum';
$_['column_refund_history']			= 'Verlauf';
$_['column_action']					= 'Aktion';
$_['column_status']					= 'Status';
$_['column_amount']					= 'Betrag';
$_['column_description']			= 'Beschreibung';

// Entry
$_['entry_total']					= 'Gesamt';
$_['entry_order_status']			= 'Auftragsstatus';
$_['entry_geo_zone']				= 'Geozone';
$_['entry_status']					= 'Status';
$_['entry_sort_order']				= 'Reihenfolge';
$_['entry_key']						= 'Schlüssel';
$_['entry_secret']					= 'Geheimbegriff';
$_['entry_debug']					= 'Berichte';

// Help
$_['help_debug']					= 'Berichte aktivieren wird auch sensible Daten speichern - nur aktivieren wenn notwendig!';
$_['help_total']					= 'Gesamtbetrag im Warenkorb damit diese Zahlungsart angezeigt wird';

// Button
$_['button_refund']					= 'Rückzahlung';

// Error
$_['error_key']						= 'Schlüssel erforderlich';
$_['error_secret']					= 'Geheimbegriff erforderlich';
$_['error_composer']				= 'Kann Cardinity SDK nicht laden. Entweder eine komilierte Version downladen oder composer verwenden';
$_['error_php_version']				= 'Mind. PHP Version 5.4.0 ist erforderlich';
$_['error_permission']				= 'Keine Rechte für diese Aktion';
$_['error_connection']				= 'Konnte keine Verbindung zur Cardinity API herstellen. Bitte Schlüssel und Geheimbegriff überprüfen';
$_['error_warning']					= 'Achtung: Formular auf Fehler überprüfen';