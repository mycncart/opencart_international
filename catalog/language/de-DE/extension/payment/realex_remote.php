<?php
/**
 * @version		$Id: realex_remote.php 4582 2016-12-07 09:25:24Z mic $
 * @package		Language Translation german
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Text
$_['text_title']			= 'Kreditkartenzahlung';
$_['text_credit_card']		= 'Kreditkartendetails';
$_['text_wait']				= 'Bitte warten ..';
$_['text_result']			= 'Ergebnis Genehmigung';
$_['text_message']			= 'Nachricht';
$_['text_cvn_result']		= 'CVN Ergebnis';
$_['text_avs_postcode']		= 'AVS Code';
$_['text_avs_address']		= 'AVS Adresse';
$_['text_eci']				= 'ECI (3D Secure) Ergebnis';
$_['text_tss']				= 'TSS Ergebnis';
$_['text_card_bank']		= 'Kartenausteller';
$_['text_card_country']		= 'Karte aus Land';
$_['text_card_region']		= 'Karte aus Region';
$_['text_last_digits']		= 'letten 4 Ziffern';
$_['text_order_ref']		= 'Auftragsreferenz';
$_['text_timestamp']		= 'Zeitstempel';
$_['text_card_visa']		= 'Visa';
$_['text_card_mc']			= 'Mastercard';
$_['text_card_amex']		= 'American Express';
$_['text_card_switch']		= 'Switch';
$_['text_card_laser']		= 'Laser';
$_['text_card_diners']		= 'Diners';
$_['text_auth_code']		= 'Genehmigungscode';
$_['text_3d_s1']			= 'Karteninhaber nicht bestätigt, Haftungsübernahme';
$_['text_3d_s2']			= 'Inhaberschaft nicht bestätigt, keine Haftungsübernahme';
$_['text_3d_s3']			= 'Ungültige Antwort von Inhaberserver, keine Haftungsübernahme';
$_['text_3d_s4']			= 'Ausgegeben, aber ungültige Antwort von ACS (Access Control Server), keine Haftungsübernahme';
$_['text_3d_s5']			= 'Genehmigung erfolgreich, Haftungsübernahme erfoglreich';
$_['text_3d_s6']			= 'Genehmigungsversuch angenommen, Haftung übernomment';
$_['text_3d_s7']			= 'Falsches Passwort, keine Haftung';
$_['text_3d_s8']			= 'Genehmigung unsicher, keine Haftung';
$_['text_3d_s9']			= 'Ungültige Antwort von ACS, keine Haftung';
$_['text_3d_s10']			= 'Schwerer RealMPI Fehler, keine Haftung';

// Entry
$_['entry_cc_type']			= 'Kartenart';
$_['entry_cc_number']		= 'Kartennummer';
$_['entry_cc_name']			= 'Karteninhaber Name';
$_['entry_cc_expire_date']	= 'Gültig bis';
$_['entry_cc_cvv2']			= 'Sicherheitscode (CVV2)';
$_['entry_cc_issue']		= 'Karteraustellernummer';

// Help
$_['help_start_date']		= '(wenn verfügbar)';
$_['help_issue']			= '(nur Maestro und Solo)';

// Error
$_['error_card_number']		= 'Bitte Kartennummer überprüfen';
$_['error_card_name']		= 'Bitte Inhabernamen überprüfen';
$_['error_card_cvv']		= 'Bitte Sicherheitscode überprüfen';
$_['error_3d_unable']		= 'Händler benötigt 3D Secure kann aber Bank nicht überprüfen, bitte später nochmals probieren';
$_['error_3d_500_response_no_payment']	= 'Antwort von Kartenaussteller ungültig, Zahlung nicht durchgeführt';
$_['error_3d_unsuccessful']	= '3D Secure Genehmigung fehlgeschlagen';