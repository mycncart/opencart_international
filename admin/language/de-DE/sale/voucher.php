<?php
/**
 * @version		$Id: voucher.php 4455 2016-10-04 09:51:37Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']		= 'Geschenkgutschein';

// Text
$_['text_success']		= 'Datensatz erfolgreich bearbeitet';
$_['text_list']			= 'Übersicht';
$_['text_add']			= 'Neu';
$_['text_edit']			= 'Bearbeiten';
$_['text_sent']			= 'Geschenkgutschein per Email gesendet';

// Column
$_['column_name']		= 'Name';
$_['column_code']		= 'Code';
$_['column_from']		= 'Von';
$_['column_to']			= 'An';
$_['column_theme']		= 'Thema';
$_['column_amount']		= 'Betrag';
$_['column_status']		= 'Status';
$_['column_order_id']	= 'Auftragsnr.';
$_['column_customer']	= 'Kunde';
$_['column_date_added']	= 'Erstellt';
$_['column_action']		= 'Aktion';

// Entry
$_['entry_code']		= 'Code';
$_['entry_from_name']	= 'Von Name';
$_['entry_from_email']	= 'Von Email';
$_['entry_to_name']		= 'An Name';
$_['entry_to_email']	= 'An Email';
$_['entry_theme']		= 'Thema';
$_['entry_message']		= 'Nachricht';
$_['entry_amount']		= 'Betrag';
$_['entry_status']		= 'Status';

// Help
$_['help_code']			= 'Code den Kunde eingeben muss um den Gutschein einzulösen';

// Error
$_['error_selection']	= 'Keine Gutscheine ausgewählt';
$_['error_permission']	= 'Keine Rechte für diese Aktion';
$_['error_exists']		= 'Achtung: Gutscheincode ist bereits in Verwendung';
$_['error_code']		= 'Code muss zwischen 3 und 10 Zeichen lang sein';
$_['error_to_name']		= 'Empfängername muss zwischen 1 und 64 Zeichen lang sein';
$_['error_from_name']	= 'Absendername muss zwischen 1 und 64 Zeichen lang sein';
$_['error_email']		= 'Emailadresse ist nicht gültig';
$_['error_amount']		= 'Betrag muss größer oder gleich 1 sein';
$_['error_order']		= 'Achtung: dieser Gutschein kann nicht gelöscht werden da er Bestandteil eines <a href="%s">Auftrages</a> ist';