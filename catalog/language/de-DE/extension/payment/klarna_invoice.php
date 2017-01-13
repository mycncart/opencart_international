<?php
/**
 * @version		$Id: klarna_invoice.php 4582 2016-12-07 09:25:24Z mic $
 * @package		Translation - Frontend
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Text
$_['text_title']		= 'Klarna - Kauf auf Rechnung';
$_['text_terms_fee']	= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']	= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']	= 'Klarna benötigt weitere Infos um mit der Zahlung fortfahren zu können.';
$_['text_male']			= 'Mann';
$_['text_female']		= 'Frau';
$_['text_year']			= 'Jahr';
$_['text_month']		= 'Monat';
$_['text_day']			= 'Tag';
$_['text_comment']		= "Klarna Rechnungsnr.: %s\n%s/%s: %.4f";
	// old
$_['text_fee']			= 'Klarna Rechnungskauf - Zahlung binnen 14 Tage - Gebühren <span id="klarna_invoice_toc_link"></span> (+%s)<script text="javascript\">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Invoice({ el: \'klarna_invoice_toc_link\', eid: \'%s\', country: \'%s\', charge: %s});})</script>';
$_['text_no_fee']		= 'Klarna Rechnungskauf - Zahlung binnen 14 Tage - keine Gebühren <span id="klarna_invoice_toc_link"></span><script text="javascript">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Invoice({ el: \'klarna_invoice_toc_link\', eid: \'%s\', country: \'%s\'});})</script>';

// Entry
$_['entry_gender']		= 'Geschlecht';
$_['entry_pno']			= 'Sozialversicherungsnr.';
$_['entry_dob']			= 'Geburtsdatum';
$_['entry_phone_no']	= 'Telefonnr.';
$_['entry_street']		= 'Straße';
$_['entry_house_no']	= 'Hausnummer';
$_['entry_house_ext']	= 'Türnr.';
$_['entry_company']		= 'Firmennummer';

// Help
$_['help_pno']			= 'Bitte hier die Sozialversicherungsnummer angeben';
$_['help_phone_no']		= 'Hier eine erreichbare Telefonnummer angeben';
$_['help_street']		= 'Lieferung kann nur an eine gültige Adresse erfolgen';
$_['help_house_no']		= 'Bitte genaue Hausnummer angeben';
$_['help_house_ext']	= 'Bitte wenn vorhanden eine Türnummer angeben';
$_['help_company']		= 'Hier Firmenbuchnnummer angeben';

// Error
$_['error_deu_terms']		= 'Den Datenschutzbestimmungen von Klarna muss zugestimmt werden';
$_['error_address_match']	= 'Rechnungs- &amp; Zustelladresse müssen übereinstimmen';
$_['error_network']			= 'Fehler: Server momentan nicht erreichbar - bitte nochmals probieren';