<?php
/**
 * @version		$Id: amazon_listing.php 3900 2015-04-06 12:15:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title'] 				= 'Neue Amazonlistung';
$_['text_title_advanced'] 			= 'Erweiterte Listung';
$_['text_openbay'] 					= 'OpenBay Pro';
$_['text_amazon'] 					= 'Amazon EU';

// Buttons
$_['button_new'] 					= '+ neues Produkt';
$_['button_amazon_price'] 			= 'Hole Preis von Amazon';
$_['button_list'] 					= 'Liste auf Amazon';
$_['button_remove_error'] 			= '- Fehlermeldungen';
$_['button_save_upload'] 			= 'Sichern &amp; Hochladen';
$_['button_browse'] 				= 'Durchsuchen';
$_['button_saved_listings'] 		= 'Zeige gespeicherte Listungen';
$_['button_remove_links'] 			= '- Links';
$_['button_create_new_listing'] 	= '+ neue Listung';

// Help
$_['help_sku'] 						= 'Einmalige Produktnummern vom Händler';
$_['help_restock_date'] 			= 'Datem ab wann Aufträge versendet werden können. Sollte nicht länger als 30 Tage ab Bestellung sein, ansonsten wird der Auftrag automatisch gelöscht';
$_['help_sale_price'] 				= 'Verkaufspreis muss Beginn- und Endedatum haben';

//Text
$_['text_products_sent'] 			= 'Produkte wurden zur Weiterbearbeitung gesendet';
$_['button_view_on_amazon'] 		= 'Zeige auf Amazon';
$_['text_list']						= 'Übersicht';
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
$_['text_product_not_sent'] 		= 'Produkt nicht an Amazon gesendet - Grund: %s';
$_['text_not_in_catalog'] 			= 'Oder es ist nicht im Katalog &nbsp;&nbsp;&nbsp;';
$_['text_placeholder_search'] 		= 'Entweder Produktname, UPC, EAN, ISBN oder ASIN angeben';
$_['text_placeholder_condition'] 	= 'Weitere Produktbeschreibung';
$_['text_characters'] 				= 'Zeichen';
$_['text_uploaded'] 				= 'Gespeicherte Listung(en) hochgeladen';
$_['text_saved_local'] 				= 'Listung gespeichert aber noch nicht hochgeladen';
$_['text_product_sent'] 			= 'Produkt erfolgreich an Amazon gesendet';
$_['text_links_removed'] 			= 'Links für Amazonprodukt entfernt';
$_['text_product_links'] 			= 'Produktlinks';
$_['text_has_saved_listings'] 		= 'Dieses Produkt hat einen oder mehrere gespeicherte Listungen welche noch nicht hochgeladen wurden';
$_['text_edit_heading'] 			= 'Listung bearbeiten';
$_['text_germany'] 					= 'DE';
$_['text_france'] 					= 'FR';
$_['text_italy'] 					= 'IT';
$_['text_spain'] 					= 'ES';
$_['text_united_kingdom'] 			= 'UK';

// Columns
$_['column_image'] 					= 'Bild';
$_['column_asin'] 					= 'ASIN';
$_['column_price'] 					= 'Preis';
$_['column_action'] 				= 'Aktion';
$_['column_name'] 					= 'Produktname';
$_['column_model'] 					= 'Art.Nr.';
$_['column_combination'] 			= 'Kombination';
$_['column_sku_variant']			= 'Variante SKU';
$_['column_sku'] 					= 'SKU';
$_['column_amazon_sku'] 			= 'Amazon SKU';

// Entry
$_['entry_sku'] 					= 'SKU';
$_['entry_condition'] 				= 'Zustand';
$_['entry_condition_note'] 			= 'Anmerkung zu Zustand';
$_['entry_price'] 					= 'Preis';
$_['entry_sale_price'] 				= 'Verkaufpreis';
$_['entry_sale_date'] 				= 'Zeitspanne Verkauf';
$_['entry_quantity'] 				= 'Anzahl';
$_['entry_start_selling'] 			= 'Verfügbar ab';
$_['entry_restock_date'] 			= 'Retour in Lager';
$_['entry_country_of_origin'] 		= 'Herstellerland';
$_['entry_release_date'] 			= 'Veröffentlichungsdatum';
$_['entry_from'] 					= 'Von';
$_['entry_to'] 						= 'Bis';
$_['entry_product'] 				= 'Listung für Produkt';
$_['entry_category'] 				= 'Amazonkategorie';
$_['entry_browse_node'] 			= 'Startpunkt definieren';
$_['entry_marketplace'] 			= 'Marktplatz';

//Tabs
$_['tab_main'] 						= 'Haupt';
$_['tab_required'] 					= 'Erforderlich';
$_['tab_additional'] 				= 'Weiteres';

// Error
$_['error_required'] 				= 'Dieses Feld wird benötigt';
$_['error_not_saved'] 				= 'Listung nicht gespeichert - bitte alle Felder überprüfen';
$_['error_char_limit'] 				= 'Zeichen über Limit';
$_['error_length'] 					= 'Mindestlänge ist';
$_['error_upload_failed'] 			= 'Fehler beim Hochladen von produkt mit SKU: <b>%s</b>. Grund: <b>%s</b> - hochladen abgebrochen';
$_['error_load_nodes'] 				= 'Kann Startpunkt nicht finden';
$_['error_connecting'] 				= 'Problem beim verbinden mit der API. Bitte OpenBay Pro Amazon Einstellungen überprüfen. Falla das Problem weiterhin besteht, bitte den Support kontaktieren';
$_['error_text_missing'] 			= 'Suchbegriffe müssen angegeben werden';
$_['error_missing_asin'] 			= 'ASIN fehlt';
$_['error_marketplace_missing'] 	= 'Bitte einen Marktplatz auswählen';
$_['error_condition_missing'] 		= 'Zustand muss definiert werden';
$_['error_amazon_price'] 			= 'Preis von Amazon kann nicht geholt werden';
$_['error_stock'] 					= 'Produkte mit weniger 1 Stück am Lager können nicht gelistet werden';
$_['error_sku'] 					= 'SKU muss angegben werden';
$_['error_price'] 					= 'Preis muss angegeben werden';
$_['error_sending_products'] 		= 'Konnte Produkte für diese Lsitung nicht senden - bitte Support kontaktieren';
$_['error_no_products_selected'] 	= 'Keine Produkte zur Listung ausgewählt';
$_['error_not_searched'] 			= 'Vor dem Listen auf Übereinstimmung überprüfen - Artikel müssen mit Amazonartikel übereinstimmen';