<?php
/**
 * @version		$Id: globalpay_remote.php 4163 2015-12-10 18:05:49Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2015 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']					= 'Globalpay Remote';

// Text
$_['text_payment']					= 'Zahlung';
$_['text_success']					= 'Modul erfolgreich bearbeitet';
$_['text_edit']                     = 'Bearbeiten';
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
$_['text_capture_ok_order']			= 'Übernahme erfolgreich, Auftragsstatus angepasst';
$_['text_rebate_ok']				= 'Nachlass erfolgreich';
$_['text_rebate_ok_order']			= 'Nachlass erfolgreich, Auftragsstatus angepasst';
$_['text_void_ok']					= 'Auftrag erfolgreich auf Ungültig gesetzt';
$_['text_settle_auto']				= 'Auto';
$_['text_settle_delayed']			= 'Verzögert';
$_['text_settle_multi']				= 'Multi';
$_['text_ip_message']				= 'Die eigene IP-Adresse muss dem Kundenbetreuer von Globalpay vor dem Liveschalten mitgeteilt werden';
$_['text_payment_info']				= 'Zahlunsginfo';
$_['text_capture_status']			= 'Zahlung übernommen';
$_['text_void_status']				= 'Zahlung ungültig';
$_['text_rebate_status']			= 'Zahlung rabattiert';
$_['text_order_ref']				= 'Auftragsbr.';
$_['text_order_total']				= 'Gesamtbetrag genehmigt';
$_['text_total_captured']			= 'Gesamtbetrag übernommen';
$_['text_transactions']				= 'Transaktionen';
$_['text_confirm_void']				= 'Sicher diese Zahlung ungültig erklären?';
$_['text_confirm_capture']			= 'Sicher diese Zahlung übernehmen?';
$_['text_confirm_rebate']			= 'Sicher diese Zahlung rabattieren?';
$_['text_globalpay_remote']			= '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Column
$_['text_column_amount']			= 'Betrag';
$_['text_column_type']				= 'Art';
$_['text_column_date_added']		= 'Erstellt';

// Entry
$_['entry_merchant_id']				= 'Händlernr.';
$_['entry_secret']					= 'Geheimbegriff';
$_['entry_rebate_password']			= 'Rabattpasswort';
$_['entry_total']					= 'Gesamt';
$_['entry_sort_order']				= 'Reihenfolge';
$_['entry_geo_zone']				= 'Geozone';
$_['entry_status']					= 'Status';
$_['entry_debug']					= 'Berichte';
$_['entry_auto_settle']				= 'Abrechnungsart';
$_['entry_tss_check']				= 'TSS Checks';
$_['entry_card_data_status']		= 'Karteninfo';
$_['entry_3d']						= '3D Secure aktivieren';
$_['entry_liability_shift']			= 'Akzeptiere Haftungsausschließende Szenarien';
$_['entry_status_success_settled']	= 'Erfolgreich - erledigt';
$_['entry_status_success_unsettled'] = 'Erfolgreich - nicht erledigt';
$_['entry_status_decline']			= 'Abgelehnt';
$_['entry_status_decline_pending']	= 'Abgelehnt - manuelle Genehmigung';
$_['entry_status_decline_stolen']	= 'Abgelehnt - Karte gestohlen oder verloren';
$_['entry_status_decline_bank']		= 'Abgelehnt - Bankfehler';
$_['entry_status_void']				= 'Ungültig';
$_['entry_status_rebate']			= 'Rabattiert';

// Help
$_['help_total']					= 'Warenkorbsumme erreicht werden muss damit diese Zahlungsart angezeigt wird';
$_['help_card_select']				= 'Kunde kann Kartenart auswählen bevor er zum Zahlungsgateway weitergeleitet wird';
$_['help_notification']				= 'Diese URL muss dem Kundenbetreuer bei Globalpay vor dem Livegehen mitgeteilt werden';
$_['help_debug']					= 'Speichert diverse Meldungen';
$_['help_liability']				= 'Bedeutet dass auch Zahlungen akzeptiert werden welche 3D-Secure nicht bestehen';
$_['help_card_data_status']			= 'Speichert die letzten 4 Kartenzahlen, Ablaufdatum, Name, Kartenart und Bank';

// Tab
$_['tab_api']					    = 'API Details';
$_['tab_account']				    = 'Konten';
$_['tab_order_status']				= 'Auftragsstatus';
$_['tab_payment']					= 'Zahlungseinstellungen';

// Button
$_['button_capture']				= 'Übernehmen';
$_['button_rebate']					= 'Nachlass / Rückzahlung';
$_['button_void']					= 'Ungültig';

// Error
$_['error_merchant_id']				= 'Händlernr. erforderlich';
$_['error_secret']					= 'Geheimbegriff erforderlich';