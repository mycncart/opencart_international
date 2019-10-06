<?php
// Heading
$_['heading_title']              = 'Importation d\'Articles';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'Ebay';

// Text
$_['text_sync_import_line1']     = '<strong>Attention!</strong> Cela va importer tous vos produits eBay et de construire une structure de catégorie dans votre magasin. Il est conseillé de supprimer toutes les catégories et tous les produits avant d\'exécuter cette option. <br />La structure de catégorie est des catégories normales d\'eBay, pas vos catégories de magasin (si vous avez une boutique d\'eBay). Vous pouvez renommer, supprimer et modifier les catégories importées sans affecter vos produits eBay.';
$_['text_sync_import_line3']     = 'Vous devez vous assurer que votre serveur peut accepter et traiter les grandes tailles de données post. 1000 Articles eBay est d\'environ 40Mo dans la taille, vous aurez besoin de calculer ce que vous avez besoin. Si votre appel échoue alors il est probable que votre réglage est trop petit. Votre limite de mémoire de php doit être d\'environ 128 Mo.';
$_['text_sync_server_size']      = 'Actuellement, votre serveur peut accepter: ';
$_['text_sync_memory_size']      = 'Votre limite de mémoire php: ';
$_['text_import_confirm']		 = 'Cela va importer tous vos articles eBay que de nouveaux produits, êtes-vous sûr? Cela ne peut pas être annulé! Assurez-vous d\'avoir une première sauvegarde!';
$_['text_import_notify']		 = 'Votre demande d\'importation a été envoyée pour traitement. Une importation prend environ 1 heure par 1000 articles.';
$_['text_import_images_msg1']    = 'les images sont en attente d\'importation/copie à partir d\'eBay. Actualiser cette page, si le nombre ne diminue pas, puis';
$_['text_import_images_msg2']    = 'Cliquez ici';
$_['text_import_images_msg3']    = 'et attendez. Plus d\'informations sur pourquoi ce qui s\'est passé peut être trouvé <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">Ici</a>';

// Entry
$_['entry_import_item_advanced'] = 'Obtenir des données avancées';
$_['entry_import_categories']    = 'Catégories d\'importation';
$_['entry_import_description']	 = 'Importation des descriptions d\'Articles';
$_['entry_import']				 = 'Importer des articles eBay';

// Buttons
$_['button_import']				 = 'Importation';
$_['button_complete']			 = 'Complet';

// Help
$_['help_import_item_advanced']  = 'Prendra jusqu\'à 10 fois plus longtemps pour importer des articles. Imports poids, tailles, ISBN et plus si disponible';
$_['help_import_categories']     = 'Construit une structure de catégorie dans votre magasin à partir des catégories eBay';
$_['help_import_description']    = 'Ceci importera tout y compris le HTML, les compteurs de visite etc.';

// Error
$_['error_import']               = 'Impossible de charger';
$_['error_maintenance']			 = 'Votre magasin est en mode maintenance. L\'importation va échouer!';
$_['error_ajax_load']			 = 'Impossible de se connecter au serveur';
$_['error_validation']			 = 'Vous devez vous inscrire pour votre jeton API et activer le module.';