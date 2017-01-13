<?php
/**
 * @version		$Id: pp_login.php 4343 2016-06-01 10:18:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'Anmelden mit PayPal';

//Text
$_['text_module']			= 'Module';
$_['text_success']			= 'Modul erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_grey_button']		= 'Grau';
$_['text_blue_button']		= 'Blau (Empfohlen)';

//Entry
$_['entry_client_id']		= 'Kundennr.';
$_['entry_secret']			= 'Geheimbegriff';
$_['entry_sandbox']			= 'Testmodus (Sandbox)';
$_['entry_logging']			= 'Berichte aktiv';
$_['entry_customer_group']	= 'Kundegruppe';
$_['entry_button']			= 'Buttonfarbe';
$_['entry_seamless']		= 'Erlaube "Auto-Login"';
$_['entry_locale']			= 'Lokal';
$_['entry_return_url']		= 'Retour-URL';
$_['entry_status']			= 'Status';

//Help
$_['help_sandbox']			= 'Verwende Testmodus';
$_['help_customer_group']	= 'Welche Kundengruppe soll neuen Kunden zugewiesen werden';
$_['help_debug_logging']	= 'Wenn aktiviert werden diverse Meldungen in den Bericht geschrieben';
$_['help_seamless']			= 'Erlaubt automatisches Anmelden wenn Kunden den PayPal Express Checkout wählen.<br />Um diese Möglichkeit anzuwenden, muss die Option im PayPal-Konto aktiviert sein.<br />Es muss ebenfalls dasselbe Konto wie im Express Checkout verwendet werden';
$_['help_locale']			= 'Lokale PayPal-Einstellung für Shopsprache';
$_['help_return_url']		= 'Diese URL muss in der PayPal-App-Konfiguration unter Retour-URL eingefügt werden';

//Error
$_['error_permission']		= 'Keine Rechte für diese Aktion';
$_['error_client_id']		= 'Kundennummer erforderlich';
$_['error_secret']			= 'Geheimbegriff erforderlich';