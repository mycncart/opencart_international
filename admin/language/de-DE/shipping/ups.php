<?php
/**
 * @version		$Id: ups.php 3857 2015-03-02 20:53:49Z mic $
 * @package		Language Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']					= 'UPS';

// Text
$_['text_shipping']					= 'Versand';
$_['text_success']					= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']						= 'Bearbeiten';
$_['text_regular_daily_pickup']		= 'Normale tägliche Abholung';
$_['text_daily_pickup']				= 'Tägliche Abholung';
$_['text_customer_counter']			= 'Kundenschalter';
$_['text_one_time_pickup']			= 'Einmalige Abholung';
$_['text_on_call_air_pickup']		= 'Luftfracht Abholung auf Abruf';
$_['text_letter_center']			= 'Briefzentrum';
$_['text_air_service_center']		= 'Air Service Center';
$_['text_suggested_retail_rates']	= 'Vorgeschlagene Raten (UPS Geschäft)';
$_['text_package']					= 'Paket';
$_['text_ups_letter']				= 'UPS Brief';
$_['text_ups_tube']					= 'UPS Schlauch';
$_['text_ups_pak']					= 'UPS Paket';
$_['text_ups_express_box']			= 'UPS Express Box';
$_['text_ups_25kg_box']				= 'UPS 25kg Box';
$_['text_ups_10kg_box']				= 'UPS 10kg Box';
$_['text_us']						= 'Herkunft US';
$_['text_ca']						= 'Herkunft Kanada';
$_['text_eu']						= 'Herkunft EU';
$_['text_pr']						= 'Herkunft Puerto Rico';
$_['text_mx']						= 'Herkunft Mexiko';
$_['text_other']					= 'Alle anderen Länder';
$_['text_test']						= 'Test';
$_['text_production']				= 'Live';
$_['text_residential']				= 'Privat';
$_['text_commercial']				= 'Geschäftlich';
$_['text_next_day_air']				= 'UPS Nächster Tag Luftfracht';
$_['text_2nd_day_air']				= 'UPS Übernächster Tag Luftfracht';
$_['text_ground']					= 'UPS Normal';
$_['text_3_day_select']				= 'UPS 3 Tage';
$_['text_next_day_air_saver']		= 'UPS Nächster Tag Spartarif';
$_['text_next_day_air_early_am']	= 'UPS Nächster Tag Vormittag';
$_['text_2nd_day_air_am']			= 'UPS Übernächster Tag Vormittag';
$_['text_saver']					= 'UPS Spartarif';
$_['text_worldwide_express']		= 'UPS Weltweit Express';
$_['text_worldwide_expedited']		= 'UPS Weltweit Beschleunigt';
$_['text_standard']					= 'UPS Standard';
$_['text_worldwide_express_plus']	= 'UPS Weltweit Express Plus';
$_['text_express']					= 'UPS Express';
$_['text_expedited']				= 'UPS Beschleunigt';
$_['text_express_early_am']			= 'UPS Express früher Vormittag';
$_['text_express_plus']				= 'UPS Express Plus';
$_['text_today_standard']			= 'UPS Heute Standard';
$_['text_today_dedicated_courier']	= 'UPS Heute Expresskurier';
$_['text_today_intercity']			= 'UPS Heute Intercity';
$_['text_today_express']			= 'UPS Heute Express';
$_['text_today_express_saver']		= 'UPS Heute Express Spartarif';

// Entry
$_['entry_key']						= 'Berechtigung';
$_['entry_username']				= 'Benutzername';
$_['entry_password']				= 'Passwort';
$_['entry_pickup']					= 'Abholmethode';
$_['entry_packaging']				= 'Versandverpackung';
$_['entry_classification']			= 'Kundenklassifizierungscode';
$_['entry_origin']					= 'Herkunft';
$_['entry_city']					= 'Stadt';
$_['entry_state']					= 'Bundesland';
$_['entry_country']					= 'Land';
$_['entry_postcode']				= 'Postleitzahl';
$_['entry_test']					= 'Testmodus';
$_['entry_quote_type']				= 'Anfrageart';
$_['entry_service']					= 'Dienste';
$_['entry_insurance']				= 'Versicherung';
$_['entry_display_weight']			= 'Liefergewicht';
$_['entry_weight_class']			= 'Gewichtseinheit System';
$_['entry_length_class']			= 'Maßeinheit System';
$_['entry_dimension']				= 'Abmessungen (L x B x H)';
$_['entry_length']					= 'Länge';
$_['entry_height']					= 'Höhe';
$_['entry_width']					= 'Breite';
$_['entry_tax_class']				= 'Steuerklasse';
$_['entry_geo_zone']				= 'Geozone';
$_['entry_status']					= 'Status';
$_['entry_sort_order']				= 'Reihenfolge';
$_['entry_debug']					= 'Fehlermodus';

// help
$_['help_key']						= 'Den von UPS vergebenen Berechtigungscode angeben';
$_['help_username']					= 'UPS Service Benutzername angeben';
$_['help_password']					= 'UPS Benutzerpasswort angeben';
$_['help_pickup']					= 'Wie soll UPS das Paket abholen (nur wenn Lieferung innerhalb USA)?';
$_['help_packaging']				= 'Welche Versandverpackung wird verwendet?';
$_['help_classification']			= '01 - Rechnung über UPS-Konto und tägl. Abholung<br />03 - Kein UPS-Konto oder Rechnung über UPS-Konto aber keine tägl. Abholung<br />04 - Versand über UPS-Geschäft (nur wenn Ursprung in USA)';
$_['help_origin']					= 'Welches Herkunftsland soll verwendet werden (diese Einstellung dient nur dem Kunden die UPS-Produktnamen zu zeigen)';
$_['help_city']						= 'Name der Herkunftsstadt';
$_['help_state']					= '2-Zeichen ISO-Code des Herkunftbundeslandes (nur US)';
$_['help_country']					= '2-Zeichen ISO-Code des Herkunftlandes';
$_['help_postcode']					= 'Postleitzahl des Herkunftlandes';
$_['help_test']						= 'Modul im Test- (JA) oder Livemodus (Nein) verwenden';
$_['help_quote_type']				= 'Private oder Geschäftliche Lieferung';
$_['help_service']					= 'Welche UPS-Dienste werden angeboten';
$_['help_insurance']				= 'Versicherung mit Produktsumme als Wert aktivieren';
$_['help_display_weight']			= 'Soll das Liefergewicht angezeigt werden (z.B. 3,27 kg)';
$_['help_weight_class']				= 'Zwischen Kilogramm und Pfund wählen';
$_['help_length_class']				= 'Metrisches oder Englisches System wählen';
$_['help_dimension']				= 'Abmessungen (L x B x H)';
$_['help_debug']					= 'Speichert Verbindungsdaten in der Logdatei';

// Error
$_['error_permission']				= 'Keine Rechte für diese Aktion';
$_['error_key']						= 'Berechtigungsschlüssel erforderlich';
$_['error_username']				= 'Benutzername erforderlich';
$_['error_password']				= 'Passwort erforderlich';
$_['error_city']					= 'Herkunftsstadt erforderlich';
$_['error_state']					= 'Herkunftsbundesland erforderlich';
$_['error_country']					= 'Herkunftsland erforderlich';
$_['error_dimension']				= 'Durchschnittsabmessungen erforderlich';