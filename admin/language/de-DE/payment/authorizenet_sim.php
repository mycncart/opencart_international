<?php
/**
 * @version		$Id: authorizenet_sim.php 3900 2015-04-06 12:15:23Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Text
$_['text_payment']			= 'Zahlung';
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_authorizenet_sim'] = '<a onclick="window.open(\'http://reseller.authorize.net/application/?id=5561103\');"><img src="view/image/payment/authorizenet.png" alt="Authorize.Net" title="Authorize.Net" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant']		= 'Händlernummer';
$_['entry_key']				= 'Transaktionsschlüssel';
$_['entry_callback']		= 'Relay Antwort-URL';
$_['entry_md5']				= 'MD5-Hash Wert';
$_['entry_test']			= 'Testmodus';
$_['entry_total']			= 'Summe';
$_['entry_order_status']	= 'Auftragsstatus';
$_['entry_geo_zone']		= 'Geozone';
$_['entry_status']			= 'Status';
$_['entry_sort_order']		= 'Reihenfolge';

// Help
$_['help_callback']			= 'Auf <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a> anmelden und dort einstellen';
$_['help_md5']				= 'Der MD5-Hash garantiert dass die Antwort sicher von Authorize.Net kommt. Bitte anmelden und festlegen auf <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a> (optional)';
$_['help_total']			= 'Mindestgesamtsumme im Warenkorb damit diese Zahlungsart verfügbar ist';

// Error
$_['error_permission']		= 'Keine Rechte für diese Aktion';
$_['error_merchant']		= 'Händlernummer erforderlich';
$_['error_key']				= 'Transaktionsschlüssel erforderlich';