<?php
/**
 * @version		$Id: pp_standard.php 4074 2015-10-07 14:46:06Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'PayPal Standard';

// Text
$_['text_payment']			= 'Zahlung';
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_pp_standard']		= '<a href="https://www.paypal.com/at/mrb/pal=BCZYWJHWKF23Y" target="_blank"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']	= 'Genehmigung';
$_['text_sale']				= 'Verkauf';

// Entry
$_['entry_email']						= 'Email';
$_['entry_test']						= 'Testmodus';
$_['entry_transaction']					= 'Transaktionart';
$_['entry_debug']						= 'Berichte';
$_['entry_debug_help']					= 'Zeichnet zusätzliche Informationen im Systemprotokoll auf';
$_['entry_total']						= 'Summe';
$_['entry_canceled_reversal_status']	= 'Storno Abgebrochen';
$_['entry_completed_status']			= '<b style="color:green;">Fertig</b> <small>(Bezahlt)</small>';
$_['entry_denied_status']				= '<b style="color:red;">Abgelehnt</b>';
$_['entry_expired_status']				= 'Abgelaufen';
$_['entry_failed_status']				= '<b style="color:orange;">Fehlgeschlagen</b>';
$_['entry_pending_status']				= '<b style="color:#01D7AD;">In Bearbeitung</b>';
$_['entry_processed_status']			= 'Bearbeitet';
$_['entry_refunded_status']				= 'Rückerstattet';
$_['entry_reversed_status']				= 'Umgebucht';
$_['entry_voided_status']				= '<b style="color: #C60192;">Ungültig</b>';
$_['entry_geo_zone']					= 'Geozone';
$_['entry_status']						= 'Status';
$_['entry_sort_order']					= 'Reihenfolge';

// Tab
$_['tab_general']						= 'Allgemein';
$_['tab_status']						= 'Auftragsstatus';
	// OC > 2.0.1
$_['tab_order_status']					= 'Auftragsstatus';

// Help
$_['help_test']							= 'Entweder den Live - oder Testmodus (= Sandbox) verwenden';
$_['help_debug']						= 'Zeichnet weitere Infos auf (siehe Berichte)';
$_['help_total']						= 'Gesamtsumme Warenkorb damit diese Zahlungsart verfügbar ist';

// Error
$_['error_permission']					= 'Keine Rechte für diese Aktion';
$_['error_email']						= 'Email erforderlich';