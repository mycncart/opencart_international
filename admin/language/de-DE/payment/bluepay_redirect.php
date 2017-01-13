<?php
/**
 * @version		$Id: bluepay_redirect.php 4343 2016-06-01 10:18:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'BluePay Redirect (Requires SSL)';

// Text
$_['text_payment']			= 'Zahlung';
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_bluepay_redirect']	= '<a href="http://www.bluepay.com/preferred-partner/opencart" target="_blank"><img src="view/image/payment/bluepay.jpg" alt="BluePay Redirect" title="BluePay Redirect" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_sim']				= 'Simulator';
$_['text_test']				= 'Test';
$_['text_live']				= 'Live';
$_['text_sale']				= 'Verkauf';
$_['text_authenticate']		= 'Authentifizierung';
$_['text_release_ok']		= 'Freigabe erfolgreich';
$_['text_release_ok_order']	= 'Freigabe erfolgreich angewendet';
$_['text_rebate_ok']		= 'Rabatt erfolgreich';
$_['text_rebate_ok_order']	= 'Rabatt erfolgreich angewendet';
$_['text_void_ok']			= 'Status Ungültig erfoglreich angewendet';
$_['text_payment_info']		= 'Zahlungsinfos';
$_['text_release_status']	= 'Zahlung freigegeben';
$_['text_void_status']		= 'Zahlung ungültig';
$_['text_rebate_status']	= 'Zahlung rabattiert';
$_['text_order_ref']		= 'Auftragsreferenz';
$_['text_order_total']		= 'Gesamt authorisiert';
$_['text_total_released']	= 'Gesamt freigegeben';
$_['text_transactions']		= 'Transaktionen';
$_['text_column_amount']	= 'Betrag';
$_['text_column_type']		= 'Art';
$_['text_column_date_added'] = 'Erstellt';
$_['text_confirm_void']		= 'Sicher dass diese Zahlung für ungültig erklärt werden soll?';
$_['text_confirm_release']	= 'Sicher diese Zahlung freigegeben?';
$_['text_confirm_rebate']	= 'Sicher diese Zahlung rabattieren?';

// Entry
$_['entry_vendor']			= 'Anbieternr.';
$_['entry_secret_key']		= 'Geheimschlüssel';
$_['entry_test']			= 'Testmodus';
$_['entry_transaction']		= 'Transaktionsart';
$_['entry_total']			= 'Gesamt';
$_['entry_order_status']	= 'Auftragsstatus';
$_['entry_geo_zone']		= 'Geozone';
$_['entry_status']			= 'Status';
$_['entry_sort_order']		= 'Reihenfolge';
$_['entry_debug']			= 'Berichte aktiv';
$_['entry_card']			= 'Karten speichern';

// Help
$_['help_total']			= 'Betrag Gesamtsumme Brutto der Warenkorb enthalten muss damit diese Zahlungsart sichtbar ist';
$_['help_debug']			= 'Schreibt diverse Meldungen in den Bericht - nur aktivieren wenn dazu aufgefordert wird da auch sensible Daten notiert werden';
$_['help_transaction']		= 'Transaktionart <b>muss</b> definiert werden um Abozahlungen zu ermöglichen';
$_['help_cron_job_token']	= 'So lang und verwirrend wie möglich';
$_['help_cron_job_url']		= 'Um diese URL aufzurufen muss ein Cron-Job definiert werden';

$_['btn_release']			= 'Freigeben';
$_['btn_rebate']			= 'Rabatt / Rückzahlung';
$_['btn_void']				= 'Ungültig';

// Error
$_['error_permission']		= 'Keine Rechte für diese Aktion';
$_['error_account_id']		= 'Kontonummer erforderlich';
$_['error_secret_key']		= 'Geheimbegriff erforderlich';