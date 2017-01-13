<?php
/**
 * @version		$Id: country.php 4343 2016-06-01 10:18:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']				= 'Länder';

// Text
$_['text_success']				= 'Datensatz erfolgreich bearbeitet';
$_['text_list']					= 'Übersicht';
$_['text_add']					= 'Neu';
$_['text_edit']					= 'Bearbeiten';

// Column
$_['column_name']				= 'Name';
$_['column_iso_code_2']			= 'ISO Code (639-1)';
$_['column_iso_code_3']			= 'ISO Code (639-2)';
$_['column_action']				= 'Aktion';

// Entry
$_['entry_name']				= 'Name';
$_['entry_iso_code_2']			= 'ISO Code';
$_['entry_iso_code_3']			= 'ISO Code';
$_['entry_address_format']		= 'Adressenformat';
$_['entry_postcode_required']	= 'PLZ benötigt';
$_['entry_status']				= 'Status';
// Help
$_['help_address_format']		= 'Verwendung z.B. bei Emails.<br />Jeder Begriff (Datenbankfeldname) muss von einer geschwungenen Klammer begrenzt sein.<br />Beispiel: {firstname} {lastname}<br /><br />Platzhalter:<ul style="list-style: none;"><li>Vorname = {firstname}</li><li>Familienname = {lastname}</li><li>Firma = {company}</li><li>PLZ = {postcode}</li><li>Stadt = {city}</li><li>Strasse = {address_1}</li><li>Adresszusatz = {address_2}</li><li>Zone = {zone}</li><li>Zonencode = {zone_code}</li><li>Land = {country}</li></ul><hr />Hilfe zu ISO-Codes <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">hier</a>';

// Error
$_['error_permission']			= 'Keine Rechte für diese Aktion';
$_['error_name']				= 'Ländername muss zwischen 3 und 128 Buchstaben lang sein';
$_['error_default']				= 'Land kann nicht gelöscht werden da als Standard definiert';
$_['error_store']				= 'Land kann nicht gelöscht werden da es %s Shop(s) zugeordnet ist';
$_['error_address']				= 'Land kann nicht gelöscht werden da es %s Adresse(n) zugeordnet ist';
$_['error_affiliate']			= 'Land kann nicht gelöscht werden da es %s Partner(n) zugeordnet ist';
$_['error_zone']				= 'Land kann nicht gelöscht werden da es %s Zone(n) zugeordnet ist';
$_['error_zone_to_geo_zone']	= 'Land kann nicht gelöscht werden da es %s Geozone(n) zugeordnet ist';