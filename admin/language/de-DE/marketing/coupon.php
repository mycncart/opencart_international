<?php
/**
 * @version		$Id: coupon.php 4343 2016-06-01 10:18:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'Gutschein';

// Text
$_['text_success']			= 'Datensatz erfolgreich aktualisiert';
$_['text_list']				= 'Übersicht';
$_['text_add']				= 'Neu';
$_['text_edit']				= 'Bearbeiten';
$_['text_percent']			= 'Prozent';
$_['text_amount']			= 'Fixbetrag';

// Column
$_['column_name']			= 'Name';
$_['column_code']			= 'Code';
$_['column_discount']		= 'Nachlass';
$_['column_date_start']		= 'Gilt ab';
$_['column_date_end']		= 'Gilt bis';
$_['column_status']			= 'Status';
$_['column_order_id']		= 'Auftragsnr.';
$_['column_customer']		= 'Kunde';
$_['column_amount']			= 'Betrag';
$_['column_date_added']		= 'Erstellt';
$_['column_action']			= 'Aktion';

// Entry
$_['entry_name']			= 'Name';
$_['entry_code']			= 'Code';
$_['entry_type']			= 'Art';
$_['entry_discount']		= 'Nachlass';
$_['entry_logged']			= 'Angemeldet';
$_['entry_shipping']		= 'Kein Versand';
$_['entry_total']			= 'Gesamtbetrag';
$_['entry_category']		= 'Kategorie';
$_['entry_product']			= 'Produkt(e)';
$_['entry_date_start']		= 'Gilt ab';
$_['entry_date_end']		= 'Gilt bis';
$_['entry_uses_total']		= 'Verwendung pro Gutschein';
$_['entry_uses_customer']	= 'Verwendung pro Kunde';
$_['entry_status']			= 'Status';

// Help
$_['help_code']				= 'Code welchen Kunden angeben müssen um Nachlass zu erhalten';
$_['help_type']				= 'Prozente oder Fixbetrag';
$_['help_logged']			= 'Kunden müssen angemeldet sein um den Gutschein anwenden zu können';
$_['help_total']			= 'Gesamtbetrag welcher mind. erreicht werden muss um den Gutschein anwenden zu können';
$_['help_category']			= 'Alle Produkte der ausgewählten Kategorie';
$_['help_product']			= 'Bestimmte Produkt auf welche der Gutschein angewendet werden kann. Sind keine Produkte ausgewählt, gilt der Gutschein auf den aktuellen Warenkorb';
$_['help_uses_total']		= 'Maximale Anzahl der Gutschein von <b>jedem Kunden</b> angewendet werden kann. Feld leer lassen für unlimitiert';
$_['help_uses_customer']	= 'Maximale Anzahl der Gutschein <b>pro Kunde</b> angewendet werden kann. Feld leer lassen für unlimitiert';

// Error
$_['error_permission']		= 'Hinweis: keine Rechte für diese Aktion';
$_['error_exists']			= 'Achtung: Gutscheincode ist bereits in Verwendung';
$_['error_name']			= 'Gutscheinname muss zwischen 3 und 128 Zeichen lang sein';
$_['error_code']			= 'Gutscheincode muss zwischen 3 und 10 Zeichen lang sein';