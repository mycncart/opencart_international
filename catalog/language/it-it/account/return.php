<?php
// Heading 
$_['heading_title']      = 'Gestione Resi (RMA)';

// Text
$_['text_account']       = 'Account';
$_['text_return']        = 'Informazione Reso';
$_['text_return_detail'] = 'Dettagli Reso';
$_['text_description']   = '<p>Se hai un problema che non &egrave; stato risolto dal nostro supporto tecnico, puoi restituirci il prodotto. Il primo passo &egrave; compilare la scheda di Reso.</p><p>Questa scheda deve essere interamente compilata e risponderemo via e-mail entro 3 giorni lavorativi con le istruzioni sulla Reso.</p><p>I prodotti devono essere restituiti nell\'imballaggio originale. Non rimborsiamo prodotti danneggiati a causa di un imballaggio insufficiente. Si prega di usare una scatola esterna di protezione per prevenire danni durante il trasporto. La Reso deve prima essere approvata.</p>';
$_['text_order']         = 'Informazioni Ordine';
$_['text_product']          = 'Informazioni Prodotto e motivo della Reso';
$_['text_reason']        = 'Motivo del Reso';
$_['text_message']       = '<p>La tua richiesta di reso &egrave; stata correttamente inviata al titolare del negozio!</p><p>Sarai ricontattato con le istruzioni.';
$_['text_return_id']     = 'ID Reso:';
$_['text_order_id']      = 'ID Ordine:';
$_['text_date_ordered']  = 'Data dell\'Ordine:';
$_['text_status']        = 'Stato:';
$_['text_date_added']    = 'Data di Aggiunta:';
$_['text_comment']       = 'Commenti sul Reso';
$_['text_history']       = 'Cronologia Resi';
$_['text_empty']         = 'Non sono presenti resi.';
$_['text_agree']         = 'Ho letto e sottoscrivo <a href="%s" class="agree"><b>%s</b></a>';

// Column
$_['column_return_id']   = 'ID Reso RMA';
$_['column_order_id']    = 'ID Ordine';
$_['column_status']         = 'Stato';
$_['column_date_added']     = 'Data di Aggiunta';
$_['column_customer']    = 'Cliente';
$_['column_product']        = 'Nome Prodotto';
$_['column_model']       = 'Modello';
$_['column_quantity']    = 'Quantit&agrave;';
$_['column_price']       = 'Prezzo';
$_['column_opened']      = 'Aperto';
$_['column_comment']     = 'Commento';
$_['column_reason']      = 'Causa';
$_['column_action']      = 'Azione';

// Entry
$_['entry_order_id']     = 'ID Ordine';
$_['entry_date_ordered'] = 'Data dell\'Ordine';
$_['entry_firstname']    = 'Nome';
$_['entry_lastname']     = 'Cognome';
$_['entry_email']        = 'E-Mail';
$_['entry_telephone']    = 'Telefono';
$_['entry_product']      = 'Nome Prodotto';
$_['entry_model']        = 'Codice Prodotto';
$_['entry_quantity']     = 'Quantit&agrave;';
$_['entry_reason']       = 'Causa della Reso';
$_['entry_opened']       = 'Il prodotto &egrave; stato aperto';
$_['entry_fault_detail'] = 'Difetti o altri dettagli';

// Error
$_['text_error']         = 'Impossibile trovare il Reso RMA richiesto!';
$_['error_order_id']     = 'ID Ordine Obbligatorio!';
$_['error_firstname']    = 'Il Nome deve essere tra 1 e 32 caratteri!';
$_['error_lastname']     = 'Il Cognome deve essere tra 1 e 32 caratteri!';
$_['error_email']        = 'L\'indirizzo E-Mail non sembra valido!';
$_['error_telephone']    = 'Il Telefono deve essere tra 1 e 32 caratteri!';
$_['error_product']      = 'Il Nome del Prodotto deve essere pi&ugrave; grande di 3 e meno di 255 caratteri!'; //changed meaning - problematic retrocompatibility
$_['error_model']        = 'Il Modello del Prodotto deve essere pi&ugrave; grande di 3 e meno di 64 caratteri!';
$_['error_reason']       = 'Devi selezionare la Causa del Reso!';
$_['error_agree']        = 'Attenzione: bisogna accettare %s!';