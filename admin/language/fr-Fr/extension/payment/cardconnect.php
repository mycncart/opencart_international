<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Paramètres';
$_['tab_order_status']              = 'État de la commande';

// Text
$_['text_extension']                = 'Extensions';
$_['text_success']                  = 'Succès: vous avez modifié le module de paiement CardConnect!';
$_['text_edit']                     = 'Edit CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Paiement';
$_['text_authorize']                = 'Autoriser';
$_['text_live']                     = 'Vivre';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'Le Cron n\'a pas encore été exécuté';
$_['text_payment_info']             = 'Informations sur le paiement';
$_['text_payment_method']           = 'Méthode de paiement';
$_['text_card']                     = 'Carte';
$_['text_echeck']                   = 'Neteller';
$_['text_reference']                = 'Référence';
$_['text_update']                   = 'Update';
$_['text_order_total']              = 'Commande total';
$_['text_total_captured']           = 'Total capturé';
$_['text_capture_payment']          = 'Paiement de capture';
$_['text_refund_payment']           = 'Paiement de remboursement';
$_['text_void']                     = 'Vide';
$_['text_transactions']             = 'Transactions';
$_['text_column_type']              = 'Type';
$_['text_column_reference']         = 'Référence';
$_['text_column_amount']            = 'Montant';
$_['text_column_status']            = 'Statut';
$_['text_column_date_modified']     = 'Date de modification';
$_['text_column_date_added']        = 'Date d\'ajout';
$_['text_column_update']            = 'Update';
$_['text_column_void']              = 'Vide';
$_['text_confirm_capture']          = 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_refund']           = 'Êtes-vous sûr de vouloir rembourser le paiement?';
$_['text_inquire_success']          = 'S\'enquérir a réussi';
$_['text_capture_success']          = 'La demande de capture a été réussie';
$_['text_refund_success']           = 'La demande de remboursement a été réussie';
$_['text_void_success']             = 'La demande de nullité a été réussie';

// Entry
$_['entry_merchant_id']             = 'ID de commerçant';
$_['entry_api_username']            = 'Nom d\'utilisateur de l\'API';
$_['entry_api_password']            = 'Mot de passe API';
$_['entry_token']                   = 'Jeton secret';
$_['entry_transaction']             = 'Transaction';
$_['entry_environment']             = 'Environnement';
$_['entry_site']                    = 'Site';
$_['entry_store_cards']             = 'Cartes de magasin';
$_['entry_echeck']                  = 'Neteller';
$_['entry_total']                   = 'Total';
$_['entry_geo_zone']                = 'Zone Geo';
$_['entry_status']                  = 'Statut';
$_['entry_logging']                 = 'Débogage de journalisation';
$_['entry_sort_order']              = 'Ordre de tri';
$_['entry_cron_url']                = 'URL de travail cron';
$_['entry_cron_time']               = 'Cron job dernière exécution';
$_['entry_order_status_pending']    = 'Attente';
$_['entry_order_status_processing'] = 'Traitement';

// Help
$_['help_merchant_id']              = 'Votre ID de commerçant de compte CardConnect personnel.';
$_['help_api_username']             = 'Votre nom d\'utilisateur pour accéder à l\'API CardConnect.';
$_['help_api_password']             = 'Votre mot de passe pour accéder à l\'API CardConnect.';
$_['help_token']                    = 'Entrez un jeton aléatoire pour la sécurité ou utilisez celui généré.';
$_['help_transaction']              = 'Choisissez «paiement» pour capturer le paiement immédiatement ou «autoriser» à avoir à l\'approuver.';
$_['help_site']                     = 'Cela détermine la première partie de l\'URL de l\'API. Seulement changer si instruit.';
$_['help_store_cards']              = 'Si vous souhaitez stocker des cartes à l\'aide de la tokenisation.';
$_['help_echeck']                   = 'Si vous voulez offrir la capacité de payer en utilisant un eCheck.';
$_['help_total']                    = 'Le total de la commande doit atteindre avant que ce mode de paiement ne devienne actif. Doit être une valeur sans signe de devise.';
$_['help_logging']                  = 'L\'activation de debug permet d\'écrire des données sensibles dans un fichier journal. Vous devez toujours désactiver sauf instruction contraire.';
$_['help_cron_url']                 = 'Définissez une tâche cron pour appeler cette URL afin que les commandes soient mises à jour automatiquement. Il est conçu pour être exécuté quelques heures après la dernière capture d\'un jour ouvrable.';
$_['help_cron_time']                = 'C\'est la dernière fois que l\'URL du travail cron a été exécutée.';
$_['help_order_status_pending']     = 'Le statut de la commande lorsque la commande doit être autorisée par le commerçant.';
$_['help_order_status_processing']  = 'État de la commande lorsque la commande est automatiquement capturée.';

// Button
$_['button_inquire_all']            = 'Demander à tous';
$_['button_capture']                = 'Capture';
$_['button_refund']                 = 'Remboursement';
$_['button_void_all']               = 'Annuler tous les';
$_['button_inquire']                = 'Renseignez-vous';
$_['button_void']                   = 'Vide';

// Error
$_['error_permission']              = 'AVERTISSEMENT: vous n\'avez pas l\'autorisation de modifier le paiement CardConnect!';
$_['error_merchant_id']             = 'ID marchand requis!';
$_['error_api_username']            = 'Nom d\'utilisateur de l\'API requis!';
$_['error_api_password']            = 'API mot de passe requis!';
$_['error_token']                   = 'Jeton secret requis!';
$_['error_site']                    = 'Site requis!';
$_['error_amount_zero']             = 'Le montant doit être supérieur à zéro!';
$_['error_no_order']                = 'Aucune information de commande correspondante!';
$_['error_invalid_response']        = 'Réponse non valide reçue!';
$_['error_data_missing']            = 'Données manquantes!';
$_['error_not_enabled']             = 'Module non activé!';