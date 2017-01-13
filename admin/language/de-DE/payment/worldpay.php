<?php
/**
 * @version		$Id: worldpay.php 4455 2016-10-04 09:51:37Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'WorldPay';

// Text
$_['text_payment']			= 'Zahlung';
$_['text_success']			= 'Zahlungsart erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_worldpay']			= '<a href="https://support.worldpay.com/apply/default.aspx?PartnerID=E511AF91-E4A0-42DE-80B0-09C981A3FB61" target="_blank"><img src="view/image/payment/worldpay.png" alt="Worldpay" title="Worldpay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_test']				= 'Test';
$_['text_live']				= 'Live';
$_['text_authenticate']		= 'Genehmigen';
$_['text_release_ok']		= 'Freigabe erfolgreich';
$_['text_release_ok_order']	= 'Freigabe erfolgreich, Auftragsstatus geändert';
$_['text_refund_ok']		= 'Rabatt erfolgreich';
$_['text_refund_ok_order']	= 'Rabatt erfolgreich, Auftragsstatus geändert';
$_['text_void_ok']			= 'Ungültig erfolgreich, Auftragsstatus geändert';


// Entry
$_['entry_service_key']			= 'Serviceschlüssel';
$_['entry_client_key']			= 'Kundenschlüssel';
$_['entry_total']				= 'Summe';
$_['entry_order_status']		= 'Auftragsstatus';
$_['entry_geo_zone']			= 'Geozone';
$_['entry_status']				= 'Status';
$_['entry_sort_order']			= 'Reihenfolge';
$_['entry_debug']				= 'Berichte';
$_['entry_card']				= 'Karten';
$_['entry_secret_token']		= 'Geheimbegriff';
$_['entry_webhook_url']			= 'Webhook URL';
$_['entry_cron_job_url']		= 'Cronjob URL';
$_['entry_last_cron_job_run']	= 'Cronjob lief zuletzt';
$_['entry_success_status']		= 'Status Erfolgreich';
$_['entry_failed_status']		= 'Status Fehlgeschlagen';
$_['entry_settled_status']		= 'Status Erledigt';
$_['entry_refunded_status']		= 'Status Erstattet';
$_['entry_partially_refunded_status']	= 'Status teilweise Rückerstattet';
$_['entry_charged_back_status']			= 'Status Rückzahlung';
$_['entry_information_requested_status']= 'Status Information Anfrage';
$_['entry_information_supplied_status']	= 'Status Information mitgeteilt';
$_['entry_chargeback_reversed_status']	= 'Status Rücknahme Rückzahlung';
$_['entry_reversed_status']				= 'Status Rücknahme';
$_['entry_voided_status']				= 'Status Ungültig';

// Help
$_['help_total']			= 'Mindestgesamtsumme im Warenkorb damit diese Zahlungsart verfügbar ist';
$_['help_debug']			= 'Speichert diverse Berichte';
$_['help_secret_token']		= 'So kompliziert wir möglich';
$_['help_webhook_url']		= 'Worldpay ruft diese URL für Rückmeldungen auf';
$_['help_cron_job_url']		= 'Cronjob definieren um diese URL aufzurufen';

// Tab
$_['tab_settings']			= 'Einstellungen';
$_['tab_order_status']		= 'Auftragsstatus';
// Error
$_['error_permission']		= 'Keine Rechte für diese Aktion';
$_['error_service_key']		= 'Serviceschlüssel erforderlich';
$_['error_client_key']		= 'Kundenschlüssel erforderlich';

// Order page - payment tab
$_['text_payment_info']		= 'Zahlungsinfo';
$_['text_refund_status']	= 'Zahlung retourniert';
$_['text_order_ref']		= 'Auftragsnr.';
$_['text_order_total']		= 'Gesamtsumme genehmigt';
$_['text_total_released']	= 'Gesamtsumme freigegeben';
$_['text_transactions']		= 'Transaktionen';
$_['text_column_amount']	= 'Betrag';
$_['text_column_type']		= 'Art';
$_['text_column_date_added']= 'Erstellt';
$_['text_confirm_refund']	= 'Sicher diese Zahlung rücküberweisen?';

$_['button_refund']			= 'Rabatt / Rückzahlung';
$_['btn_refund']			= 'Rabatt / Rückzahlung';