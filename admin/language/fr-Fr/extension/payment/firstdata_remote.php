<?php
// Heading
$_['heading_title']					 = 'First Data EMEA Web Service API';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Extensions';
$_['text_success']					 = 'Succès: vous avez modifié les premiers Détails du compte de données!';
$_['text_edit']                      = 'Modifier First Data EMEA Web Service API';
$_['text_card_type']				 = 'Type de carte';
$_['text_enabled']					 = 'Activé';
$_['text_merchant_id']				 = 'ID de magasin';
$_['text_subaccount']				 = 'SG';
$_['text_user_id']					 = 'ID utilisateur';
$_['text_capture_ok']				 = 'La capture a réussi';
$_['text_capture_ok_order']			 = 'La capture a été réussie, l\'état de commande mis à jour à succès-réglé';
$_['text_refund_ok']				 = 'Le remboursement a été couronné de succès';
$_['text_refund_ok_order']			 = 'Le remboursement a été réussi, l\'état de commande mis à jour pour remboursé';
$_['text_void_ok']					 = 'Le vide a été réussi, l\'état de commande mis à jour pour invalider';
$_['text_settle_auto']				 = 'Vente';
$_['text_settle_delayed']			 = 'Pre auth';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Informations sur le paiement';
$_['text_capture_status']			 = 'Paiement capturé';
$_['text_void_status']				 = 'Paiement annulé';
$_['text_refund_status']			 = 'Paiement remboursé';
$_['text_order_ref']				 = 'Réf. de commande';
$_['text_order_total']				 = 'Total autorisé';
$_['text_total_captured']			 = 'Total capturé';
$_['text_transactions']				 = 'Transactions';
$_['text_column_amount']			 = 'Montant';
$_['text_column_type']				 = 'Type';
$_['text_column_date_added']		 = 'Créé';
$_['text_confirm_void']				 = 'Êtes-vous sûr de vouloir annuler le paiement?';
$_['text_confirm_capture']			 = 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_refund']			 = 'Êtes-vous sûr de vouloir rembourser le paiement?';

// Entry
$_['entry_certificate_path']		 = 'Chemin d\'accès au certificat';
$_['entry_certificate_key_path']	 = 'Chemin de clé privée';
$_['entry_certificate_key_pw']		 = 'Mot de passe de clé privée';
$_['entry_certificate_ca_path']		 = 'Chemin d\'accès ca';
$_['entry_merchant_id']				 = 'ID de magasin';
$_['entry_user_id']					 = 'ID utilisateur';
$_['entry_password']				 = 'Passe';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Ordre de tri';
$_['entry_geo_zone']				 = 'Zone Geo';
$_['entry_status']					 = 'Statut';
$_['entry_debug']					 = 'Débogage de journalisation';
$_['entry_auto_settle']				 = 'Type de règlement';
$_['entry_status_success_settled']	 = 'Succès-réglé';
$_['entry_status_success_unsettled'] = 'Succès-non réglé';
$_['entry_status_decline']			 = 'Déclin';
$_['entry_status_void']				 = 'Annulée';
$_['entry_status_refund']			 = 'Remboursé';
$_['entry_enable_card_store']		 = 'Activer les jetons de stockage de carte';
$_['entry_cards_accepted']			 = 'Types de cartes acceptés';

// Help
$_['help_total']					 = 'Le total de la commande doit atteindre avant que ce mode de paiement devienne actif';
$_['help_certificate']				 = 'Les certificats et les clés privées doivent être stockés en dehors de vos dossiers Web publics';
$_['help_card_select']				 = 'Demandez à l\'utilisateur de choisir son type de carte avant qu\'il ne soit Redirigé';
$_['help_notification']				 = 'Vous devez fournir cette URL aux premières données pour obtenir des notifications de paiement';
$_['help_debug']					 = 'L\'activation de debug permet d\'écrire des données sensibles dans un fichier journal. Vous devez toujours désactiver sauf instruction contraire.';
$_['help_settle']					 = 'Si vous utilisez pre-auth, vous devez remplir une action post-auth dans les 3-5 jours, sinon votre transaction sera supprimée';

// Tab
$_['tab_account']					 = 'Info API';
$_['tab_order_status']				 = 'État de la commande';
$_['tab_payment']					 = 'Paramètres de paiement';

// Button
$_['button_capture']				 = 'Capture';
$_['button_refund']					 = 'Remboursement';
$_['button_void']					 = 'Vide';

// Error
$_['error_merchant_id']				 = 'ID de magasin est nécessaire';
$_['error_user_id']					 = 'L\'ID utilisateur est requis';
$_['error_password']				 = 'Mot de passe requis';
$_['error_certificate']				 = 'Le chemin d\'accès au certificat est requis';
$_['error_key']						 = 'La clé de certificat est requise';
$_['error_key_pw']					 = 'Mot de passe clé de certificat est nécessaire';
$_['error_ca']						 = 'L\'autorité de certification (ca) est requise';