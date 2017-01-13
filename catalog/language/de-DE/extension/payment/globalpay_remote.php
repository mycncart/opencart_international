<?php
/**
 * @version		$Id: globalpay_remote.php 4582 2016-12-07 09:25:24Z mic $
 * @package		Translation Frontend
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Text
$_['text_title']				= 'Kreditkarte';
$_['text_credit_card']			= 'Details';
$_['text_wait']					= 'Bitte warten ..';
$_['text_result']				= 'Ergebnis';
$_['text_message']				= 'Nachricht';
$_['text_cvn_result']			= 'CVN Ergebnis';
$_['text_avs_postcode']			= 'AVS Postleitzahl';
$_['text_avs_address']			= 'AVS Adresse';
$_['text_eci']					= 'ECI (3D Secure) Ergebnis';
$_['text_tss']					= 'TSS Ergebnis';
$_['text_card_bank']			= 'Ausstellerbank';
$_['text_card_country']			= 'Land';
$_['text_card_region']			= 'Region';
$_['text_last_digits']			= 'Letzte 4 Ziffern';
$_['text_order_ref']			= 'Auftragsnr.';
$_['text_timestamp']			= 'Zeitstempel';
$_['text_card_visa']			= 'Visa';
$_['text_card_mc']				= 'Mastercard';
$_['text_card_amex']			= 'American Express';
$_['text_card_switch']			= 'Switch';
$_['text_card_laser']			= 'Laser';
$_['text_card_diners']			= 'Diners';
$_['text_auth_code']			= 'Genhemigungscode';
$_['text_3d_s1']				= 'Karteninhaber nicht bestätigt';
$_['text_3d_s2']				= 'Echtheit kann nicht bestätigt werden';
$_['text_3d_s3']				= 'Ungültige Antwort vom Echtheitsserver';
$_['text_3d_s4']				= 'Gültig, aber falsche Antwort vom ACS (Access Control Server)';
$_['text_3d_s5']				= 'Genehmigung erfolgreich';
$_['text_3d_s6']				= 'Genehmigung erfolgreich angenommen';
$_['text_3d_s7']				= 'Falsches Passwort';
$_['text_3d_s8']				= 'Echtheit kann nicht bestätigt werden';
$_['text_3d_s9']				= 'Ungültige Antwort vom ACS (Access Control Server)';
$_['text_3d_s10']				= 'RealMPI - schwerer Fehler';

// Entry
$_['entry_cc_type']				= 'Kartenart';
$_['entry_cc_number']			= 'Kartennummer';
$_['entry_cc_name']				= 'Karteninhaber';
$_['entry_cc_expire_date']		= 'Gültig Bis';
$_['entry_cc_cvv2']				= 'Sicherheitscode (CVV2)';
$_['entry_cc_issue']			= 'Ausstellernummer';

// Help
$_['help_start_date']			= '(wenn verfügbar)';
$_['help_issue']				= '(nur Maestro und Solo)';

// Error
$_['error_card_number']			= 'Bitte richtige Kartennummer angeben';
$_['error_card_name']			= 'Bitte richtigen Inhabernamen angeben';
$_['error_card_cvv']			= 'Bitte Sicherheitscode (CVV2) überprüfen';
$_['error_3d_unable']			= 'Händler verlangt 3D-Secure, kann aber momentan mit der Bank nicht geprüft werden. Bitte etwas später nochmals probieren';
$_['error_3d_500_response_no_payment'] = 'Ungültige Antwort von Kartenaussteller erhalten, keine Zahlung durchgeführt';
$_['error_3d_unsuccessful']		= '3D-Secure Genehmigung ungültig';