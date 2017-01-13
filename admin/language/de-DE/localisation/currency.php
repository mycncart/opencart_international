<?php
/**
 * @version		$Id: currency.php 4343 2016-06-01 10:18:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'Währungen';

// Text
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_list']				= 'Übersicht';
$_['text_add']				= 'Neu';
$_['text_edit']				= 'Bearbeiten';

// Column
$_['column_title']			= 'Name';
$_['column_code']			= 'Code';
$_['column_value']			= 'Wert';
$_['column_date_modified']	= 'Le. Änderung';
$_['column_action']			= 'Aktion';

// Entry
$_['entry_title']			= 'Name';
$_['entry_code']			= 'Code';
$_['entry_value']			= 'Wert';
$_['entry_symbol_left']		= 'Symbol davor';
$_['entry_symbol_right']	= 'Symbol danach';
$_['entry_decimal_place']	= 'Dezimalstellen';
$_['entry_status']			= 'Status';

// Help
$_['help_code']				= 'Nicht ändern wenn dies die Standardwährung ist.<br />Für gültige ISO Codes siehe <a href="http://www.xe.com/iso4217.php" target="_blank">hier</a>';
$_['help_value']			= 'Wert mit 1.00000 definieren wenn dies die Standardwährung ist';

// Error
$_['error_permission']		= 'Keine Rechte für diese Aktion';
$_['error_title']			= 'Währungsbezeichnung muss zwischen 3 und 32 Buchstaben lang sein';
$_['error_code']			= 'Währungscode muss aus 3 Buchstaben bestehen';
$_['error_default']			= 'Währung kann nicht gelöscht werden da Standardwährung des Shops';
$_['error_store']			= 'Währung kann nicht gelöscht werden weil sie noch in %s Shop(s) verwendet wird';
$_['error_order']			= 'Währung kann nicht gelöscht werden weil damit noch %s Bestellung(en) verknüpft ist/sind';