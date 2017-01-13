<?php
/**
 * @version		$Id: ebay_settings.php 4163 2015-12-10 18:05:49Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']        			= 'Marktplatzeinstellungen';
$_['text_openbay']					= 'OpenBay Pro';
$_['text_ebay']						= 'eBay';

// Text
$_['text_developer']				= 'Entwickler / Support';
$_['text_app_settings']				= 'Applikationseinstellungen';
$_['text_default_import']			= 'Vorgabe Importeinstellungen';
$_['text_payments']					= 'Zahlungen';
$_['text_notify_settings']			= 'Benachrichtigungen';
$_['text_listing']					= 'Listungen';
$_['text_token_register']			= 'Für eBay Token registrieren';
$_['text_token_renew']				= 'eBay Token aktualisieren';
$_['text_application_settings']		= 'Die Applikationseinstellungen bestimmen wie OpenBay Pro arbeitet und wie es im System integriert wird';
$_['text_import_description']		= 'Auftragsstatusse für veschiedene Bereiche. Ist dieser hier nicht angeführt, kann er nicht auf eBay verwendet werden';
$_['text_payments_description']		= 'Vorgaben für Zahlungen bei neuen Listungen';
$_['text_allocate_1']				= 'Wenn Kunde kauft';
$_['text_allocate_2']				= 'Wenn Kunde gekauft hat';
$_['text_developer_description']	= 'Nur verwenden wenn dazu angewiesen wurde';
$_['text_payment_paypal']			= 'PayPal akzeptiert';
$_['text_payment_paypal_add']		= 'PayPal Emailadresse';
$_['text_payment_cheque']			= 'Scheck akzeptiert';
$_['text_payment_card']				= 'Kreditkarten akzeptiert';
$_['text_payment_desc']				= 'Siehe Beschreibung (z.b. bei Banküberweisung)';
$_['text_tax_use_listing'] 			= 'Verwende Steuern wie auf eBay';
$_['text_tax_use_value']			= 'Verwende Wert für alle';
$_['text_notifications']			= 'Wie Kunden benachtichtigt werden sollen bei Auftragsänderungen';
$_['text_listing_1day']             = '1 Tag';
$_['text_listing_3day']             = '3 Tage';
$_['text_listing_5day']             = '5 Tage';
$_['text_listing_7day']             = '7 Tage';
$_['text_listing_10day']            = '10 Tage';
$_['text_listing_30day']            = '30 Tage';
$_['text_listing_gtc']              = 'Bis storniert wird';
$_['text_api_status']               = 'API Verbindungsatatus';
$_['text_api_ok']                   = 'Verbindung OK, Token läuft ab';
$_['text_api_failed']               = 'Überprüfung fehlgeschlagen';
$_['text_api_other']        		= 'Andere Aktionen';
$_['text_create_date_0']            = 'Wenn hinzugefügt im lokalen Shop';
$_['text_create_date_1']            = 'Wenn hinzugefügt auf eBay';
$_['text_obp_detail_update']        = 'Update Store URL &amp; Kontaktemail';
$_['text_success']					= 'Einstellungen erfolgreich gespeichert';
$_['text_edit']						= 'Bearbeiten';

// Entry
$_['entry_status']					= 'Status';
$_['entry_token']					= 'Token';
$_['entry_secret']					= 'Geheim';
$_['entry_string1']					= 'Verschlüsselung Wert 1';
$_['entry_string2']					= 'Verschlüsselung Wert 2';
$_['entry_end_items']				= 'Ende Artikel?';
$_['entry_relist_items']			= 'Wieder anzeigen wenn zurück in Lager?';
$_['entry_disable_soldout']			= 'Deaktivieren wenn nicht lagernd?';
$_['entry_debug']					= 'Aktiviere Berichte';
$_['entry_currency']				= 'Standardwährung';
$_['entry_stock_allocate']			= 'Lagerreservierung';
$_['entry_created_hours']			= 'Neue Aufträge Zeitlimit';
$_['entry_developer_locks']			= 'Auftragssperren entsperren?';
$_['entry_payment_instruction']		= 'Zahlungsanweisungen';
$_['entry_payment_immediate']		= 'Sofortzahlung erfordert';
$_['entry_payment_types']			= 'Zahlungsarten';
$_['entry_brand_disable']			= 'Herstellerlink nicht anzeigen';
$_['entry_duration']				= 'Vorgabe Listdauer';
$_['entry_measurement']				= 'Bewertungssystem';
$_['entry_address_format']			= 'Vorgabe Adressformat';
$_['entry_timezone_offset']			= 'Zeitzone Unterschied';
$_['entry_tax_listing']				= 'Artikelsteuer';
$_['entry_tax']						= 'Steuer % wird für alles verwendet';
$_['entry_create_date']				= 'Erstellungsdatum für neue Aufträge';
$_['entry_notify_order_update']		= 'Auftragsupdates';
$_['entry_notify_buyer']			= 'Neuer Auftrag - Käufer';
$_['entry_notify_admin']			= 'Neuer Auftrag - Admin';
$_['entry_import_pending']			= 'Importiere unbezahlte Aufträge';
$_['entry_import_def_id']			= 'Importiere Standardstatus';
$_['entry_import_paid_id']			= 'Status Bezahlt';
$_['entry_import_shipped_id']		= 'Status Versendet';
$_['entry_import_cancelled_id']		= 'Status Storniert';
$_['entry_import_refund_id']		= 'Status Erstattet';
$_['entry_import_part_refund_id']	= 'Status tw. Rückerstattet';

// Tabs
$_['tab_api_info']					= 'API Details';
$_['tab_setup']						= 'Einstellungen';
$_['tab_defaults']					= 'Standardvorgaben';

// Help
$_['help_disable_soldout']			= 'Wenn ausverkauft, deaktiviere auch lokal';
$_['help_relist_items'] 			= 'Existierte zuvor ein Artikellink, wird voriger Artikel wieder angezeigt wenn zurück auf Lager';
$_['help_end_items']    			= 'Wenn lokal ausverkauft, auch bei eBay deaktivieren';
$_['help_currency']     			= 'Basierend auf den lokalen Währungen';
$_['help_created_hours']   			= 'Aufträge gelten als Neu wenn jünger als dieses Limit, Vorgabe ist 72 Stunden';
$_['help_stock_allocate'] 			= 'Wann soll reserviert werden?';
$_['help_payment_instruction']  	= 'Soviele Einzelheiten wie möglich angeben';
$_['help_payment_immediate'] 		= 'Sofortzahlung verhindert Zahlungsausfälle';
$_['help_listing_tax']     			= 'Sicherstellen dass die richtige Steuer angewendet wird';
$_['help_tax']             			= 'Verwendung bei importierten Aufträgen';
$_['help_duration']    				= 'Dauer ist nur möglich wenn ein eBay-Shop existiert';
$_['help_address_format']      		= 'Verwendung nur wenn noch keine Definition vorhanden ist';
$_['help_create_date']         		= 'Welche Erstellungszeit bei importierten Aufträgen';
$_['help_timezone_offset']     		= 'In Stunden. 0 ist GMT. Nur für eBay bei Bestellung';
$_['help_notify_admin']   			= 'Benachrichtigt den Admin bei neuen Aufträgen';
$_['help_notify_order_update']		= 'Für automatische Updates';
$_['help_notify_buyer']        		= 'Benachrichtigt Käufer mit lokaler Standardbestellemail';
$_['help_measurement']        		= 'Welches Bewertungssystem soll verwendet werden';

// Buttons
$_['button_update']             	= 'Update';
$_['button_repair_links']    		= 'Repariere Artikellinks';

// Error
$_['error_api_connect']         	= 'Keine Verbindung möglich';