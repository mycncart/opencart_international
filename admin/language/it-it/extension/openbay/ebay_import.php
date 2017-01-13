<?php
// Heading
$_['heading_title']                     = 'Item import';
$_['text_openbay']                      = 'openBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<strong>Attenzione!</strong> Importer&agrave; tutti i vostri prodotti eBay e costruir&agrave; una struttura di categorie nel negozio. Si avvisa di cancellare tutte le categorie e prodotti prima di eseguire queste opzioni. <br />La strutura delle categorie priviene dalle normali categorie eBay e non le categorie del vostro negozio (se avete un negozio eBay). Potete modificare rimuovere  le categorie importate senza modificare i prodotti eBay.';
$_['text_sync_import_line3']            = 'Assicurarsi che il server possa accettare e processare l\'invio di dati, tramite PoST, di grandi dimensioni. 1000 oggetti eBay sono circa 40Mb, quindi calcolate quanto vi sia neccessario. Se le richieste non vanno a buon fine allora &egrave; probabile che le impostazioni siano errate e troppo ridotte. Il limite di memoria PHP deve essere di almeno 128Mb.';
$_['text_sync_server_size']             = 'Attualmente il server pu&ograve; accettare: ';
$_['text_sync_memory_size']             = 'Limite memoria PHP: ';
$_['text_import_confirm']				= 'Impoter&agrave; i vostri oggetti eBay come nuovi prodotti, siete sicuri? L\'operazione NoN E\' reversibile! ASSICURARSI prima di aver fatto un backup!';
$_['text_import_notify']				= 'La richiesta d\'importazione &egrave stata inviata. L\'importazione richiede circa 1 ora per 1000 oggetti.';
$_['text_import_images_msg1']           = 'Le immagini sono in attesa di importazione/copia da eBay. Aggiornare la pagina, se il numero non diminuisce allora';
$_['text_import_images_msg2']           = 'Cliccare qui';
$_['text_import_images_msg3']           = 'ed aspettare. Maggiori informazioni sul perch&egrave; accada <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">cliccare qui</a>';

// Entry
$_['entry_import_item_advanced']        = 'Get advanced data';
$_['entry_import_categories']         	= 'Import categories';
$_['entry_import_description']			= 'Import item descriptions';
$_['entry_import']						= 'Import eBay items';

// Buttons
$_['button_import']						= 'Importa';
$_['button_complete']					= 'Completato';

// Help
$_['help_import_item_advanced']        	= 'Will take up to 10 times longer to import items. Imports weights, sizes, ISBN and more if available';
$_['help_import_categories']         	= 'Builds a category structure in your store from the eBay categories';
$_['help_import_description']         	= 'This will import everything including HTML, visit counters etc';

// Error
$_['error_import']                   	= 'Failed to load';
$_['error_maintenance']					= 'Your store is in maintenance mode. Importing will fail!';
$_['error_ajax_load']					= 'Failed to connect to server';
$_['error_validation']					= 'You need to register for your API token and enable the module.';