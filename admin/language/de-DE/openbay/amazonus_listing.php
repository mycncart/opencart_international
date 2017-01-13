<?php
/**
 * @version		$Id: amazonus_listing.php 3900 2015-04-06 12:15:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title'] 				= 'Neue Amazonlisting';
$_['text_title_advanced'] 			= 'Erweiteret Listing';
$_['text_openbay'] 					= 'OpenBay Pro';
$_['text_amazon'] 					= 'Amazon US';

// Buttons
$_['button_new'] 					= '+ neues Produkt';
$_['button_amazon_price'] 			= 'Hole Amazonpreis';
$_['button_list'] 					= 'Auf Amazon listen';
$_['button_remove_error'] 			= '- Fehlermeldungen';
$_['button_save_upload'] 			= 'Sichern &amp; Hochladen';
$_['button_browse'] 				= 'Durchsuchen';
$_['button_saved_listings'] 		= 'Zeige gespeicherte Listungen';
$_['button_remove_links'] 			= '- Links';
$_['button_create_new_listing'] 	= '+ neue Listung';

// Help
$_['help_sku'] 						= 'Einmalige Produktnummer vom Händler';
$_['help_restock_date'] 			= 'Datum  wielange zurück alte Aufträge versendet werden. Datum soltle nicht merh als max. 20 Tage betragen, da ansonsten die Aufträge automatisch storniert werden';
$_['help_sale_price'] 				= 'Verkaufspreis muss eine Start- und Endedatum haben';

//Text
$_['text_products_sent'] 			= 'Produkte zur Bearbeitung gesendet';
$_['button_view_on_amazon'] 		= 'Zeige auf Amazon';
$_['text_list'] 					= 'Liste auf Amazon';
$_['text_new'] 						= 'Neu';
$_['text_used_like_new'] 			= 'Gebraucht - wie neu';
$_['text_used_very_good'] 			= 'Gebraucht - sehr gut';
$_['text_used_good'] 				= 'Gebraucht - gut';
$_['text_used_acceptable'] 			= 'Gebraucht - annehmbar';
$_['text_collectible_like_new'] 	= 'Sammlerstück - wie neu';
$_['text_collectible_very_good'] 	= 'Sammlerstück - sehr gut';
$_['text_collectible_good'] 		= 'Sammlerstück - gut';
$_['text_collectible_acceptable'] 	= 'Sammlerstück - annehmbar';
$_['text_refurbished'] 				= 'Renoviert';
$_['text_product_not_sent'] 		= 'Produkt nicht an Amzon gesendet, Grund: %s';
$_['text_not_in_catalog'] 			= 'Oder es ist nicht am Katalog&nbsp;&nbsp;&nbsp;';
$_['text_placeholder_search'] 		= 'Entweder Produktname oder UPC, EAN, ISBN, ASIN angeben';
$_['text_placeholder_condition'] 	= 'Weitere Produktbeschreibung';
$_['text_characters'] 				= 'Zeichen';
$_['text_uploaded'] 				= 'Gespeicherte Listung(en) hochgeladen';
$_['text_saved_local'] 				= 'Listung gespeichert aber noch nicht hochgeladen';
$_['text_product_sent'] 			= 'Produkt erfoglriech an Amazon gesendet';
$_['text_links_removed'] 			= 'Amazon Produktlinks entfernt';
$_['text_product_links'] 			= 'Produktlinks';
$_['text_has_saved_listings'] 		= 'Dieses Produkt hat ein oder mehrere Listung(en) welche noch nicht hochgeladen sind';
$_['text_edit_heading'] 			= 'Listing bearbeiten';

// Columns
$_['column_image'] 					= 'Bild';
$_['column_asin'] 					= 'ASIN';
$_['column_price'] 					= 'Preis';
$_['column_action'] 				= 'Aktion';
$_['column_name'] 					= 'Produktname';
$_['column_model'] 					= 'Art.Nr.';
$_['column_combination'] 			= 'Kombination';
$_['column_sku_variant'] 			= 'Variante SKU';
$_['column_sku'] 					= 'SKU';
$_['column_amazon_sku'] 			= 'Amazon SKU';

// Entry
$_['entry_sku'] 					= 'SKU';
$_['entry_condition'] 				= 'Zustand';
$_['entry_condition_note'] 			= 'Bemerkung Zustand';
$_['entry_price'] 					= 'Preis';
$_['entry_sale_price'] 				= 'Verkaufspreis';
$_['entry_sale_date'] 				= 'Verkaufsdatume';
$_['entry_quantity'] 				= 'Anzahl';
$_['entry_start_selling'] 			= 'Verfügbar ab';
$_['entry_restock_date'] 			= 'Datum zurück in Lager';
$_['entry_country_of_origin'] 		= 'Herstellerland';
$_['entry_release_date'] 			= 'Datum Veröffentlchung';
$_['entry_from'] 					= 'Von';
$_['entry_to'] 						= 'Bis';
$_['entry_product'] 				= 'Listung für Produkt';
$_['entry_category'] 				= 'Amazonkategorie';

//Tabs
$_['tab_main'] 						= 'Haupt';
$_['tab_required'] 					= 'Erforderlich';
$_['tab_additional'] 				= 'Weiteres';

//Errors
$_['error_text_missing'] 			= 'Suchdetails müssen angegeben sein';
$_['error_data_missing'] 			= 'Es fehlen erforderliche Daten';
$_['error_missing_asin'] 			= 'ASIN fehlt';
$_['error_marketplace_missing'] 	= 'Bitte einen marktplatz auswählen';
$_['error_condition_missing'] 		= 'Zustand fehlt';
$_['error_fetch'] 					= 'Daten konnten nicht geholt werden';
$_['error_amazonus_price'] 			= 'Preis von Amazon US konnte nicht geholt werden';
$_['error_stock'] 					= 'Artikel mit weniger als 1 Stück am Lager kann nicht gelistet werden';
$_['error_sku'] 					= 'SKU fehlt';
$_['error_price'] 					= 'Preis fehlt';
$_['error_connecting'] 				= 'Hinweis: Verbindung nicht nöglich, bitte Einstellungen überprüfen. Besteht das Problem weiterhin, muss der Support kontaktiert werden.';
$_['error_required'] 				= 'Dieses Feld wird benötigt!';
$_['error_not_saved'] 				= 'Listung nicht gesischert, bitte alle Feler überprüfen';
$_['error_char_limit'] 				= 'Zeichen zuviel';
$_['error_length'] 					= 'Mindestlänge ist is';
$_['error_upload_failed'] 			= 'Produkt mit SKU <b>%s</b> nicht hochgeladen, Grund <b>%s</b>. Hochladen beendet.';
$_['error_load_nodes'] 				= 'Kann die Knioten nicht laden';
$_['error_not_searched'] 			= 'Vor einer Listung zuerst nach passenden Artikel suchen. Artikel müssen dem Amazonkatalog entsprechen';