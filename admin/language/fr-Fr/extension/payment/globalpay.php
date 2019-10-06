<?php
// Heading
$_['heading_title']					 = 'Globalpay Redirect';

// Text
$_['text_extension']				  	 = 'Extensions';
$_['text_success']					 = 'Succès: vous avez modifié les détails du compte globalpay!';
$_['text_edit']                      = 'Edit globalpay Redirect';
$_['text_live']						 = 'Vivre';
$_['text_demo']						 = 'Démo';
$_['text_card_type']				 = 'Type de carte';
$_['text_enabled']					 = 'Activé';
$_['text_use_default']				 = 'Utiliser par défaut';
$_['text_merchant_id']				 = 'ID de commerçant';
$_['text_subaccount']				 = 'SG';
$_['text_secret']					 = 'Secret partagé';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'Mastercard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'La capture a réussi';
$_['text_capture_ok_order']			 = 'La capture a été réussie, l\'état de commande mis à jour à succès-réglé';
$_['text_rebate_ok']				 = 'Le rabais a été couronné de succès';
$_['text_rebate_ok_order']			 = 'Le rabais a été réussi, le statut de la commande a été actualisé';
$_['text_void_ok']					 = 'Le vide a été réussi, l\'état de commande mis à jour pour invalider';
$_['text_settle_auto']				 = 'Auto';
$_['text_settle_delayed']			 = 'Retardé';
$_['text_settle_multi']				 = 'Multi';
$_['text_url_message']				 = 'Vous devez fournir l\'URL du magasin à votre gestionnaire de compte globalpay avant de passer en direct';
$_['text_payment_info']				 = 'Informations sur le paiement';
$_['text_capture_status']			 = 'Paiement capturé';
$_['text_void_status']				 = 'Paiement annulé';
$_['text_rebate_status']			 = 'Paiement remboursé';
$_['text_order_ref']				 = 'Réf. de commande';
$_['text_order_total']				 = 'Total autorisé';
$_['text_total_captured']			 = 'Total capturé';
$_['text_transactions']				 = 'Transactions';
$_['text_column_amount']			 = 'Montant';
$_['text_column_type']				 = 'Type';
$_['text_column_date_added']		 = 'Créé';
$_['text_confirm_void']				 = 'Êtes-vous sûr de vouloir annuler le paiement?';
$_['text_confirm_capture']			 = 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_rebate']			 = 'Êtes-vous sûr de vouloir rembourser le paiement?';
$_['text_globalpay']                 = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				 = 'ID de commerçant';
$_['entry_secret']					 = 'Secret partagé';
$_['entry_rebate_password']			 = 'Mot de passe de rabais';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Ordre de tri';
$_['entry_geo_zone']				 = 'Zone Geo';
$_['entry_status']					 = 'Statut';
$_['entry_debug']					 = 'Débogage de journalisation';
$_['entry_live_demo']				 = 'Live/Demo';
$_['entry_auto_settle']				 = 'Type de règlement';
$_['entry_card_select']				 = 'Sélectionner une carte';
$_['entry_tss_check']				 = 'Contrôles TSS';
$_['entry_live_url']				 = 'URL de connexion en direct';
$_['entry_demo_url']				 = 'URL de connexion démo';
$_['entry_status_success_settled']	 = 'Succès-réglé';
$_['entry_status_success_unsettled'] = 'Succès-non réglé';
$_['entry_status_decline']			 = 'Déclin';
$_['entry_status_decline_pending']	 = 'Refuser-auth Offline';
$_['entry_status_decline_stolen']	 = 'Refus-carte perdue ou volée';
$_['entry_status_decline_bank']		 = 'Déclin-erreur de banque';
$_['entry_status_void']				 = 'Annulée';
$_['entry_status_rebate']			 = 'Remboursé';
$_['entry_notification_url']		 = 'URL de notification';

// Help
$_['help_total']					 = 'Le total de la commande doit atteindre avant que ce mode de paiement devienne actif';
$_['help_card_select']				 = 'Demandez à l\'utilisateur de choisir son type de carte avant qu\'il ne soit Redirigé';
$_['help_notification']				 = 'Vous devez fournir cette URL à globalpay pour obtenir des notifications de paiement';
$_['help_debug']					 = 'L\'activation de debug permet d\'écrire des données sensibles dans un fichier journal. Vous devez toujours désactiver sauf instruction contraire';
$_['help_dcc_settle']				 = 'Si votre sous-compte DCC est activé, vous devez utiliser autosettle';

// Tab
$_['tab_api']					     = 'Détails de l\'API';
$_['tab_account']		     		 = 'Comptes';
$_['tab_order_status']				 = 'État de la commande';
$_['tab_payment']					 = 'Paramètres de paiement';
$_['tab_advanced']					 = 'Avancé';

// Button
$_['button_capture']				 = 'Capture';
$_['button_rebate']					 = 'Remboursement/remboursement';
$_['button_void']					 = 'Vide';

// Error
$_['error_merchant_id']				 = 'ID de commerçant est nécessaire';
$_['error_secret']					 = 'Secret partagé est nécessaire';
$_['error_live_url']				 = 'L\'URL en direct est requise';
$_['error_demo_url']				 = 'L\'URL de démonstration est requise';
$_['error_data_missing']			 = 'Données manquantes';
$_['error_use_select_card']			 = 'Vous devez avoir "sélectionner la carte" activé pour le routage de sous-compte par type de carte pour travailler';