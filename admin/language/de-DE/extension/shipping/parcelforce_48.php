<?php
/**
 * @version		$Id: parcelforce_48.php 4467 2016-10-11 14:59:21Z mic $
 * @package		Language Language Translation German Backend
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']				= 'Parcelforce 48';

// Text
$_['text_extension']			= 'Erweiterungen';
$_['text_shipping']				= 'Versand';
$_['text_success']				= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']					= 'Bearbeiten';

// Entry
$_['entry_rate']				= 'Parcelforce 48 Einheiten';
$_['entry_insurance']			= 'Parcelforce48 Versicherung';
$_['entry_display_weight']		= 'Liefergewicht';
$_['entry_display_insurance']	= 'Versicherung';
$_['entry_display_time']		= 'Lieferzeit';
$_['entry_tax_class']			= 'Steuerklasse';
$_['entry_geo_zone']			= 'Geozone';
$_['entry_status']				= 'Status';
$_['entry_sort_order']			= 'Reihenfolge';

// help
$_['help_rate']					= 'Angaben mit Zahlen bis 5 Stellen und 2 Nachkommastellen möglich. (12345.67) Beispiel: .1:1,.25:1.27 - Gewicht kleiner als 0.1 kg kostet 1,00, Gewicht bis 0.25 kg (aber mehr als 0.1) kostet 1,27. (Nur Zahlen angeben, keine Maße!)';
$_['help_insurance']			= 'Werte bis 5 Stellen gültig (12345.67) Beispiel: 34:0,100:1,250:2.25 - Versicherung für Warenwert bis 34,- 0, zwischen 100 und 150 2.25 extra.<br />Keine Währung angeben!';
$_['help_display_weight']		= 'Soll das Liefergewicht angezeigt werden (z.B. 3,27 kg)';
$_['help_display_insurance']	= 'Soll die Lieferversicherung angezeigt werden (z.B. Versichert bis 500)';
$_['help_display_time']			= 'Soll die Lieferzeit angezeigt werden (z.B. innerhalb 3-5 Tage)';

// Error
$_['error_permission']			= 'Keine Rechte für diese Aktion';