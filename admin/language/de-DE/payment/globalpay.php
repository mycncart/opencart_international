<?php
/**
 * @version		$Id: globalpay.php 4163 2015-12-10 18:05:49Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2015 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']					= 'Globalpay Umleitung';

// Text
$_['text_payment']					= 'Zahlung';
$_['text_success']					= 'Modul erfolgreich bearbeitet';
$_['text_edit']                     = 'Bearbeiten';
$_['text_live']						= 'Live';
$_['text_demo']						= 'Demo';
$_['text_card_type']				= 'Kartenart';
$_['text_enabled']					= 'Aktiv';
$_['text_use_default']				= 'Vorgabe anwenden';
$_['text_merchant_id']				= 'Händlernr.';
$_['text_subaccount']				= 'Unterkonto';
$_['text_secret']					= 'Geheimbegriff';
$_['text_card_visa']				= 'Visa';
$_['text_card_master']				= 'Mastercard';
$_['text_card_amex']				= 'American Express';
$_['text_card_switch']				= 'Switch/Maestro';
$_['text_card_laser']				= 'Laser';
$_['text_card_diners']				= 'Diners';
$_['text_capture_ok']				= 'Übernahme erfolgreich';
$_['text_capture_ok_order']			= 'Übernahme erfolgreich, Auftragsstatus geändert';
$_['text_rebate_ok']				= 'Nachlass erfolgreich';
$_['text_rebate_ok_order']			= 'Nachlass erfolgreich, Auftragsstatus geändert';
$_['text_void_ok']					= 'Auftrag erfolgreich auf Ungültig gesetzt';
$_['text_settle_auto']				= 'Auto';
$_['text_settle_delayed']			= 'Verzögert';
$_['text_settle_multi']				= 'Multi';
$_['text_url_message']				= 'URL muss vor der Liveschaltung des Shop dem Kundenbetreuer von Globalpay mitgeteilt werden';
$_['text_payment_info']				= 'Zahlungsinfo';
$_['text_capture_status']			= 'Zahlung übernommen';
$_['text_void_status']				= 'Zahlung ungültig';
$_['text_rebate_status']			= 'Zahlung retourniert';
$_['text_order_ref']				= 'Auftragsnr.';
$_['text_order_total']				= 'Gesamtbetrag genehmigt';
$_['text_total_captured']			= 'Gesamtbetrag übernommen';
$_['text_transactions']				= 'Transaktionen';
$_['text_column_amount']			= 'Betrag';
$_['text_column_type']				= 'Art';
$_['text_column_date_added']		= 'Erstellt';
$_['text_confirm_void']				= 'Sicher diese Zahlung ungültig stellen?';
$_['text_confirm_capture']			= 'Sicher diese Zahlung übernehmen?';
$_['text_confirm_rebate']			= 'Sicher diese Zahlung rabattieren?';
$_['text_globalpay']                = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				= 'Händlernr.';
$_['entry_secret']					= 'Geheimbegriff';
$_['entry_rebate_password']			= 'Rabattpasswort';
$_['entry_total']					= 'Gesamt';
$_['entry_sort_order']				= 'Reihenfolge';
$_['entry_geo_zone']				= 'Geozone';
$_['entry_status']					= 'Status';
$_['entry_debug']					= 'Berichte';
$_['entry_live_demo']				= 'Live / Demo';
$_['entry_auto_settle']				= 'Abrechungsart';
$_['entry_card_select']				= 'Karte wählen';
$_['entry_tss_check']				= 'TSS Checks';
$_['entry_live_url']				= 'Live URL';
$_['entry_demo_url']				= 'Demo URL';
$_['entry_status_success_settled']	= 'Abrechnung erfolgreich';
$_['entry_status_success_unsettled']= 'Abrechnung nicht erfolgreich';
$_['entry_status_decline']			= 'Abgelehnt';
$_['entry_status_decline_pending']	= 'Abgelehnt - Genehmigung';
$_['entry_status_decline_stolen']	= 'Abgelehnt - verlorene oder gestohlene Karte';
$_['entry_status_decline_bank']		= 'Abgelehnt - Bankenfehler';
$_['entry_status_void']				= 'Ungültig';
$_['entry_status_rebate']			= 'Rabattiert';
$_['entry_notification_url']		= 'Benachrichtigungs-URL';

// Help
$_['help_total']					= 'Mindestbetrag Warenkorb damit diese Zahlungsart angeziegt wird';
$_['help_card_select']				= 'Kunde kann Kartenart auswählen bevor er weitergeleitet wird';
$_['help_notification']				= 'Diese URL Globalpay mitteilen damit Zahlungsbenachrichtigungen erfolgen können';
$_['help_debug']					= 'Wenn aktiv werden diverse Berichte gespeichert';
$_['help_dcc_settle']				= 'Wenn im Unterkonto DCC aktiviert ist, Auto verwenden';

// Tab
$_['tab_api']					    = 'API Details';
$_['tab_account']		     		= 'Konten';
$_['tab_order_status']				= 'Auftragsstatus';
$_['tab_payment']					= 'Einstellungen Zahlungen';
$_['tab_advanced']					= 'Erweitert';

// Button
$_['button_capture']				= 'Übernehmen';
$_['button_rebate']					= 'Rabattieren / Rückzahlen';
$_['button_void']					= 'Ungültig';

// Error
$_['error_merchant_id']				= 'Händlernr. ist erforderlich';
$_['error_secret']					= 'Geheimbegriff ist erforderlich';
$_['error_live_url']				= 'Live-URL ist erforderlich';
$_['error_demo_url']				= 'Demo-URL ist erforderlich';
$_['error_data_missing']			= 'Es fehlen noch Angaben';
$_['error_use_select_card']			= 'Unterkonto muss <b>Karte wählen</b> aktiviert bei Kartenzahlungen';