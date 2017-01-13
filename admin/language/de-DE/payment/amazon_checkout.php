<?php
/**
 * @version		$Id: amazon_checkout.php 3900 2015-04-06 12:15:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */
//Headings
$_['heading_title']					= 'Bezahlen mit Amazon';

// Text
$_['text_payment']					= 'Zahlung';
$_['text_success']					= 'Modul erfolgreich aktualisiert';
$_['text_edit']						= 'Bearbeiten';
$_['text_germany']					= 'Deutschland';
$_['text_uk']						= 'Grossbritannien';
$_['text_live']						= 'Live';
$_['text_sandbox']					= 'Testmodus';
$_['text_upload_success']			= 'Datei erfolgreich hochgeladen';
$_['text_button_settings']			= 'Checkoutbutton Einstellungen';
$_['text_orange']					= 'Orange';
$_['text_tan']						= 'Gelbbraun';
$_['text_white']					= 'Weiß';
$_['text_light']					= 'Hell';
$_['text_dark']						= 'Dunkel';
$_['text_medium']					= 'Mittel';
$_['text_large']					= 'Groß';
$_['text_x_large']					= 'Extragroß';
$_['text_download']					= '<a href="%s" target="_blank">Download</a> eine Vorlage vom Amazon Händlerportal';
$_['text_amazon_details']			= 'Amazon Details';
$_['text_amazon_order_id']			= 'Amazon Auftragsnr.';
$_['text_upload']					= 'Upload';
$_['text_upload_template']			= 'Hochladen der Vorlage durch klicken des Buttons. Sichergehen dass es als Tab-Delimited Datei gespeichert wurde.';
$_['text_amazon_checkout']			= '<a onclick="window.open(\'http://go.amazonservices.com/UKCBASPOpenCart.html\');"><img src="view/image/payment/amazon.png" alt="Mit Amazon Bezahlen" title="Mit Amazon Bezahlen" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join']				= '<a href="http://go.amazonservices.com/UKCBASPOpenCart.html" title="Hier klicken um Zahlungen per Amazon zu ermöglichen">Hier klicken um Zahlungen per Amazon zu ermöglichen</a>';

// Columns
$_['column_submission_id']			= 'Übermittlungsnr.';
$_['column_status']					= 'Status';
$_['column_text']					= 'Antwort';
$_['column_amazon_order_item_code']	= 'Amazon Auftragsnr.';

// Entry
$_['text_merchant_id']				= 'Händlernummer';
$_['text_access_key']				= 'Zugangsschlüssel';
$_['text_access_secret']			= 'Geheimschlüssel';
$_['text_checkout_mode']			= 'Checkoutmodus';
$_['text_marketplace']				= 'Marktplatz';
$_['text_pending_status']			= 'Wartestellung';
$_['text_ready_status']				= 'Status <b>Fertig zum Versand</b>';
$_['text_shipped_status']			= 'Status <b>Versendet</b>';
$_['text_canceled_status']			= 'Status <b>Abgebrochen</b>';
$_['entry_cron_job_url']			= 'Cronjob URL';
$_['entry_cron_job_token']			= 'Geheimes Token';
$_['entry_cron_job_last_run']		= 'Cronjob letzte Durchführung';
$_['entry_ip']						= 'IP-Adresse';
$_['entry_ip_allowed']				= 'Erlaubte IP-Adressen';
$_['entry_total']	         		= 'Gesamt';
$_['text_geo_zone']					= 'Geozone';
$_['text_status']					= 'Status';
$_['text_sort_order']				= 'Reihenfolge';
$_['entry_colour']					= 'Farbe';
$_['entry_background']				= 'Hintergrund';
$_['entry_size']				    = 'Größe';

// Help
$_['help_cron_job_url']				= 'Einen Cronjob definieren zum Aufruf dieser URL';
$_['help_adjustment']				= 'Fett markierte Felder und mindestens 1 "-adj" Feld sind erforderlich';
$_['help_allowed_ips']				= 'Leer lassen wenn jeder den Checkoutbutton sehen soll';
$_['help_ip']						= 'z.B. 203.0.113.0<br />Feld leer lassen um alle IPs zu erlauben';
$_['help_cron_job_token']			= 'Hinweis: leicht zu merken, aber dennoch schwierig zu erraten';

// Order Info
$_['tab_order_adjustment']			= 'Auftragseinstellung';

// Errors
$_['error_permissions']				= 'Hinweis: keine Rechte zum Bearbeiten dieses Moduls';
$_['error_empty_access_secret']		= 'Geheimschlüssel ist erforderlich';
$_['error_empty_access_key']		= 'Zugangsschlüssel ist erforderlich';
$_['error_empty_merchant_id']		= 'Händlernummer ist erforderlich';
$_['error_curreny']					= 'Der Shop muss %s Währung(en) installiert und aktiviert haben';
$_['error_upload']					= 'Upload fehlgeschlagen';