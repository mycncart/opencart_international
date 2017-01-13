<?php
// Text
$_['text_title']				= 'Fattura Klarna - Paga in 14 giorni';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Invoice requires some additional information before they can proccess your order.';
$_['text_male']					= 'Uomo';
$_['text_female']				= 'Donna';
$_['text_year']					= 'Anno';
$_['text_month']				= 'Mese';
$_['text_day']					= 'Giorno';
$_['text_comment']				= 'ID Fattura Klarna: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Sesso';
$_['entry_pno']					= 'Numero Personale';
$_['entry_dob']					= 'Data di Nascita';
$_['entry_phone_no']			= 'Numero di Telefono';
$_['entry_street']				= 'Indirizzo';
$_['entry_house_no']			= 'Nr. Casa';
$_['entry_house_ext']			= 'Casta Est..';
$_['entry_company']				= 'Partita IVA';

// Help
$_['help_pno']					= 'Si prega di inserire il numero di sicurezza sociale (USA).';
$_['help_phone_no']				= 'Si prega di inserire il numero di telefono.';
$_['help_street']				= 'Si prega di notare che la spedizione pu&ograve; avvenire solo verso l\'indirizzo registrato durante il pagamento su Klarna.';
$_['help_house_no']				= 'Si prega di Inserire il numero di casa.';
$_['help_house_ext']			= 'Si prega di inserire l\'estensione casa. Es. A, B, C, Red, Blue ecc.';
$_['help_company']				= 'Si prega di inserire la Partita IVA';

// Error
$_['error_deu_terms']			= 'Si deve accettare l\'informativa sulla privacy della Klarna (Datenschutz)';
$_['error_address_match']		= 'Gli indirizzi di pagamento e spedizione devono coincidere per utilizzare le Fatture Klarna';
$_['error_network']				= 'Errore durante il collegamento a Klarna. Si prega di riprovare.';
?>