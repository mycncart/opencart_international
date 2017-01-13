<?php
/**
 * @version		$Id: ebay_import.php 3900 2015-04-06 12:15:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']                     = 'Artikelimport';
$_['text_openbay']                      = 'OpenBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<b>Achtung!</b> Hiermit werden alle eBay-Produkte importiert und als neue Kategoeir lokal gespeichert.<br />Es wird empfohlen zuvor alle lokalen Kategorien und Produkte zu löschen<br />Die neue Kategoriestruktur wird die von eBay sein, nicht die Lokale. Nach dem Import können alle Einträge bearbeitet werden ohne die eBay-Einstellungen zu ändern.';
$_['text_sync_import_line3']            = 'Vor dem Import sicherstellen dass der Server große Datenmengen akzeptieren kann. Beispiel: 1.000 eBay-Artikel sind etwa 4o MB groß.<br />Schlägt der Import fehl, sind die Servereinstellungen  anzupassen, z.B. php-Speicherlimit sollte nicht unter 128 MB liegen';
$_['text_sync_server_size']             = 'Aktuell akzeptiert der Server: ';
$_['text_sync_memory_size']             = 'Aktuelles php-Speicherlimti: ';
$_['text_import_confirm']				= 'Dieser Vorgang importiert alle eBay-Artikel!<br />Der Vorgang kann nicht rückgängig gemacht werden. Zuvor auf alle Fälle eine Sicherung der lokalen Daten machen!';
$_['text_import_notify']				= 'Importanfrage wurde übermittelt. Der Import kann für 1.000 Artikel bis zu 1 Stunde dauern.';
$_['text_import_images_msg1']           = 'noch ausstehende Bilder von eBay. Seite nochmals laden falls die Nummer sich nicht erhöht';
$_['text_import_images_msg2']           = 'hier klicken';
$_['text_import_images_msg3']           = 'und warten. Weitere Infos dazu <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">hier</a>';

// Entry
$_['entry_import_item_advanced']        = 'Hole erweitere Daten';
$_['entry_import_categories']         	= 'Importiere Kategorien';
$_['entry_import_description']			= 'Importiere Artikelbeschreibungen';
$_['entry_import']						= 'Importiere eBay-Artikel';

// Buttons
$_['button_import']						= 'Importieren';
$_['button_complete']					= 'Fertig';

// Help
$_['help_import_item_advanced']        	= 'Verlängert den Import um ca. das 10-fache. Importiert auch alle weiteren daten wie z.B. Gewicht, Größe, usw. wenn verfügbar';
$_['help_import_categories']         	= 'BIldet eine Kategoriestruktur wie auf eBay';
$_['help_import_description']         	= 'Importiert alles inkl. HTML, Besucherzahlen usw.';

// Error
$_['error_import']                   	= 'Import fehlgeschlagen';
$_['error_maintenance']					= 'Store ist aktuell im Wartungsmodus - kein Import möglich!';
$_['error_ajax_load']					= 'Keine Verbindung zum Server möglich';
$_['error_validation']					= 'Bitte zuerst registrieren und dann Modul aktivieren';