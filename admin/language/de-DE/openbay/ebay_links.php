<?php
/**
 * @version		$Id: ebay_links.php 4163 2015-12-10 18:05:49Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']         		= 'Artikellinks';
$_['text_openbay']					= 'OpenBay Pro';
$_['text_ebay']						= 'eBay';

// Buttons
$_['button_resync']               	= 'Wiederauffrischen';
$_['button_check_unlinked']       	= 'Prüfe ni. verlinkte Artikel';
$_['button_remove_link']       		= '- Link';

// Errors
$_['error_ajax_load']          		= 'Anfrage konnte nicht bearbeitet werden, bitte später nochmals probieren.';
$_['error_validation']         		= 'Bitte zuerst Registrieren und dann das Modul aktivieren';
$_['error_no_listings']      		= 'Keine verlinkten Produkte gefunden';
$_['error_link_value']          	= 'Der Produktlink ist nicht gültig';
$_['error_link_no_stock']    		= 'Nicht lagernde Artikel können nicht verlinkt werden. Bitte auf eBay händisch beenden.';
$_['error_subtract_setting']        = 'Dieser Artikel verringert nicht den lokalen Lagerstand';

// Text
$_['text_linked_items']             = 'Verlinkte Artikel';
$_['text_unlinked_items']           = 'Ni. verlinkte Artikel';
$_['text_alert_stock_local']        = 'Listung auf eBay wirdmit lokalem Lagerstand abgeglichen';
$_['text_link_desc1']               = 'Verlinkte Artikel erlauben den Lagerstandsabgleich';
$_['text_link_desc2']               = 'Lokaler und Ebay-Lagerstand werden immer abgeglichen';
$_['text_link_desc3']               = 'Der lokale Lagerstand - der auf Ebay sollte gleich sein';
$_['text_link_desc4']               = 'Reservierte Artikel welche zwar noch auf Lager sind, aber noch nicht bezahlt. Diese Menge sollte nicht als Verfügbar gekennzeichnet sein.';
$_['text_text_linked_desc']         = 'Verlinkte Artikel sind lokale Artikel welche mit einem eBay-Artikel verlinkt sind.';
$_['text_text_unlinked_desc']       = 'Nicht verlinkte Artikel sind Artikel auf Ebay welche nicht mit lokalen Artikeln verlinkt sind.';
$_['text_text_unlinked_info']       = 'Den Button <b>Prüfe ni. verlinkte Artikel</b> anklicken um auf eBay nach nicht verlinkten Artikeln zu suchen.<br />Dieser Vorgang kann einige Zeit dauern.';
$_['text_text_loading_items']       = 'Lade Artikel';
$_['text_failed']       			= 'Vorgang fehlgeschlagen';
$_['text_limit_reached']       		= 'Maximale Anzahl an Anfragen erreicht, Button zum Fortfahren anklicken';
$_['text_stock_error']       		= 'Lagerstandsfehler';
$_['text_listing_ended']       		= 'Listung beendet';
$_['text_filter']             		= 'Ergebnisse filtern';
$_['text_filter_title']             = 'Titel';
$_['text_filter_range']             = 'Lagerstand';
$_['text_filter_range_from']        = 'Min.';
$_['text_filter_range_to']          = 'Max.';
$_['text_filter_var']             	= 'Inkl. Varianten';

// Tables
$_['column_action']            		= 'Aktion';
$_['column_status']            		= 'Status';
$_['column_variants']          		= 'Varianten';
$_['column_item_id']            	= 'eBay Art.Nr.';
$_['column_product']           		= 'Produkt';
$_['column_product_auto']      		= 'Produktname (Autovervollständigung)';
$_['column_listing_title']     		= 'eBay Listungsname';
$_['column_allocated']         		= 'Reservierte Artikel';
$_['column_ebay_stock']        		= 'Lager eBay';
$_['column_stock_available']   		= 'Lager lokal';
$_['column_stock_reserve']   		= 'Reservelager';