<?php
/**
 * @version		$Id: firstdata.php 4457 2016-10-05 10:04:36Z mic $
 * @package		Language Translation German Backend
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'First Data EMEA Connect (3DSecure aktiviert)';

// Text
$_['text_extension']		= 'Erweiterungen';
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_notification_url']	= 'URL Benachrichtigung';
$_['text_live']				= 'Live';
$_['text_demo']				= 'Demo';
$_['text_enabled']			= 'Aktiviert';
$_['text_merchant_id']		= 'Händlernummer';
$_['text_secret']			= 'Geheimbegriff';
$_['text_capture_ok']		= 'Erfassung erfolgreich';
$_['text_capture_ok_order']	= 'Datenerfassung erfolgreich, Auftragsstatus angepasst';
$_['text_void_ok']			= 'Auftragsstatus erfolgreich, Auftragsstatus angepasst';
$_['text_settle_auto']		= 'Verkauf';
$_['text_settle_delayed']	= 'Genehmigung';
$_['text_success_void']		= 'Transaktion ungültig';
$_['text_firstdata']		= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_success_capture']	= 'Transaktion wurde erfasst';
$_['text_payment_info']		= 'Zahlungsinfo';
$_['text_capture_status']	= 'Zahlung geholt';
$_['text_void_status']		= 'Zahlung ungültig';
$_['text_order_ref']		= 'Auftragsreferenz';
$_['text_order_total']		= 'Gesamt genehmigt';
$_['text_total_captured']	= 'Gesamt geholt';
$_['text_transactions']		= 'Transaktionen';
$_['text_column_amount']	= 'Betrag';
$_['text_column_type']		= 'Art';
$_['text_column_date_added']= 'Erstellt';
$_['text_confirm_void']		= 'Sicher diese Zahlung für ungültig erklären?';
$_['text_confirm_capture']	= 'Sicher diese Zahlung holen?';
	// old
$_['text_payment']			= 'Zahlung';

// Entry
$_['entry_merchant_id']		= 'Händlernummer';
$_['entry_secret']			= 'Geheimbegriff';
$_['entry_total']			= 'Gesamt';
$_['entry_sort_order']		= 'Reihenfolge';
$_['entry_geo_zone']		= 'Geozone';
$_['entry_status']			= 'Status';
$_['entry_debug']			= 'Berichte aktiv';
$_['entry_live_demo']		= 'Live / Demo';
$_['entry_auto_settle']		= 'Art der Abwicklung';
$_['entry_card_select']		= 'Karte auswählen';
$_['entry_tss_check']		= 'Prüfe TSS';
$_['entry_live_url']		= 'URL Live';
$_['entry_demo_url']		= 'URL Demo';
$_['entry_status_success_settled']	= 'Abwicklung festgelegt';
$_['entry_status_success_unsettled']= 'Abwicklug aufgehoben';
$_['entry_status_decline']			= 'Ablehnen';
$_['entry_status_void']				= 'Ungültig';
$_['entry_enable_card_store']		= 'Speicherung Kartentoken';

// Help
$_['help_total']			= 'Mindestsumme Warenkorb damit diese Bezahlung aktiv ist';
$_['help_notification']		= 'Diese URL muss an First Data übergeben werden um Zahlungsbenachrichtigungen zu erhalten';
$_['help_debug']			= 'Mit dem aktivieren dieser Einstellung werden tw. sensible Daten aufgezeichnet - nur aktivieren wenn erforderlich (z.B. bei Fehlersuche)';
$_['help_settle']			= 'Wird Genehmigung verwendet muss innerhalb von 3-5 Tagen eine Antwort erfolgen ansonsten die Zahlung nicht erfolgen wird';

// Tab
$_['tab_account']			= 'API Info';
$_['tab_order_status']		= 'Auftragsstatus';
$_['tab_payment']			= 'Allgemein';
$_['tab_advanced']			= 'Erweitert';

$_['button_capture']		= 'Holen';
$_['button_void']			= 'Ungültig';

// Error
$_['error_merchant_id']		= 'Händlernummer erforderlich';
$_['error_secret']			= 'Geheimbegriff erforderlich';
$_['error_live_url']		= 'Live URL ist erforderlich';
$_['error_demo_url']		= 'Demo URL ist erforderlich';
$_['error_data_missing']	= 'Es fehlen einige Angaben';
$_['error_void_error']		= 'Kann Transaktion nicht für Ungültig erklären';
$_['error_capture_error']	= 'Kann Daten nicht holen';