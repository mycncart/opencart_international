<?php
/**
 * @version		$Id: realex.php 4163 2015-12-10 18:05:49Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'Realex Redirect';
$_['text_realex']			= '<a target="_blank" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';

// Text
$_['text_payment']			= 'Zahlung';
$_['text_success']			= 'Datensatz erfolgreich aktualisiert';
$_['text_edit']				= 'Bearbeiten';
$_['text_live']				= 'Live';
$_['text_demo']				= 'Demo';
$_['text_card_type']		= 'Kartenart';
$_['text_enabled']			= 'Aktiviert';
$_['text_use_default']		= 'Standard verwenden';
$_['text_merchant_id']		= 'Händlernr.';
$_['text_subaccount']		= 'Unterkonto';
$_['text_secret']			= 'Geheimbegriff';
$_['text_card_visa']		= 'Visa';
$_['text_card_master']		= 'Mastercard';
$_['text_card_amex']		= 'American Express';
$_['text_card_switch']		= 'Switch/Maestro';
$_['text_card_laser']		= 'Laser';
$_['text_card_diners']		= 'Diners';
$_['text_capture_ok']		= 'Daten erfolgreich geholt';
$_['text_capture_ok_order']	= 'Daten erfolgreich geholt, Auftragsstatus angepasst';
$_['text_rebate_ok']		= 'Nachlass erfolgreich';
$_['text_rebate_ok_order']	= 'Nachlass war erfolgreich, Auftragsstatus angepasst';
$_['text_void_ok']			= 'Ungültig war erfolgreich, Auftargsstatus angepasst';
$_['text_settle_auto']		= 'Auto';
$_['text_settle_delayed']	= 'Verzögert';
$_['text_settle_multi']		= 'Multi';
$_['text_url_message']		= 'Die URL muss dem Realexbetreuer vor dem Liveschalten mitgeteilt werden';
$_['text_payment_info']		= 'Zahlungsinfo';
$_['text_capture_status']	= 'Zahlung übernommen';
$_['text_void_status']		= 'Zahlung ungültig';
$_['text_rebate_status']	= 'Zahlung rabbatiert';
$_['text_order_ref']		= 'Auftragsreferenz';
$_['text_order_total']		= 'Gesamt authorisiert';
$_['text_total_captured']	= 'Gesamt übernommen';
$_['text_transactions']		= 'Transaktionen';
$_['text_column_amount']	= 'Betrag';
$_['text_column_type']		= 'Art';
$_['text_column_date_added'] = 'Erstellt';
$_['text_confirm_void']		= 'Sicher diese Zahlung für ungültig erklären?';
$_['text_confirm_capture']	= 'Sicher diese Zahlung übernehmen?';
$_['text_confirm_rebate']	= 'Sicher diese Zahlung rabattieren?';

// Entry
$_['entry_merchant_id']		= 'Händlernummer';
$_['entry_secret']			= 'Geheimbegriff';
$_['entry_rebate_password']	= 'Rabattpasswort';
$_['entry_total']			= 'Gesamt';
$_['entry_sort_order']		= 'Reihenfolge';
$_['entry_geo_zone']		= 'Geozone';
$_['entry_status']			= 'Status';
$_['entry_debug']			= 'Berichte aktiv';
$_['entry_live_demo']		= 'Live / Demo';
$_['entry_auto_settle']		= 'Abrechnungsart';
$_['entry_card_select']		= 'Karte wählen';
$_['entry_tss_check']		= 'Prüfe TSS';
$_['entry_live_url']		= 'URL Liveverbindung';
$_['entry_demo_url']		= 'URL Demoverbindung';
$_['entry_status_success_settled']		= 'Abrechnung erfolgreich';
$_['entry_status_success_unsettled']	= 'Keine Abrechnung erfolgreich';
$_['entry_status_decline']				= 'Ablehnen';
$_['entry_status_decline_pending']		= 'Ablehnung Offline';
$_['entry_status_decline_stolen']		= 'Ablehnung - Karte gestohlen';
$_['entry_status_decline_bank']			= 'Ablehnung - Bankenfehler';
$_['entry_status_void']					= 'Ungültig';
$_['entry_status_rebate']				= 'Ermässigt';
$_['entry_notification_url']			= 'Benachrichtigungs-URL';

// Help
$_['help_total']			= 'Mindestgesamtsumme der Warenkorb haben muss damit diese Zahlart angezeigt wird';
$_['help_card_select']		= 'Kunde fragen welche Karte verwendet wird vor der Weiterleitung';
$_['help_notification']		= 'Diese URL muss an Realex übermittelt werden damit Zahlungsbenachrichtigungen möglich sind';
$_['help_debug']			= 'Zeichnet Transaktionsdaten auf - nur verwenden bei Fehlersuche!';
$_['help_dcc_settle']		= 'Wenn das Unterkonto DCC aktiviert hat, dann muss Autosettle verwendet werden';

// Tab
$_['tab_api']				= 'API Details';
$_['tab_account']			= 'API info';
$_['tab_order_status']		= 'Auftragsstatus';
$_['tab_payment']			= 'Zahlungseinstellungen';
$_['tab_advanced']			= 'Erweitert';

// Button
$_['button_capture']		= 'Holen';
$_['button_rebate']			= 'Rabatt / Rückzahlen';
$_['button_void']			= 'Ungültig';

// Error
$_['error_merchant_id']		= 'Händlernummer erforderlich';
$_['error_secret']			= 'Geheimbegriff erforderlich';
$_['error_live_url']		= 'Live URL ist erforderlich';
$_['error_demo_url']		= 'Demo URL ist erforderlich';
$_['error_data_missing']	= 'Einige Angaben fehlen';
$_['error_use_select_card']	= '<b>Karte wählen</b> muss aktiviert sein für Unterkonten';