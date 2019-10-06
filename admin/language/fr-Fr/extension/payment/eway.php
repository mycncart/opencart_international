<?php
// Heading
$_['heading_title']				= 'paiement eWAY';

// Text
$_['text_extension']			= 'Extensions';
$_['text_success']				= 'Succès: vous avez modifié vos détails eWAY!';
$_['text_edit']					= 'Edit eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Autorisation';
$_['text_sale']					= 'Vente';
$_['text_transparent']			= 'Redirection transparente (formulaire de paiement sur place)';
$_['text_iframe']				= 'IFrame (formulaire de paiement dans la fenêtre)';

// Entry
$_['entry_paymode']				= 'Mode de paiement';
$_['entry_test']				= 'Mode test';
$_['entry_order_status']		= 'État de la commande';
$_['entry_order_status_refund'] = 'État des commandes remboursées';
$_['entry_order_status_auth']	= 'Statut de la commande autorisée';
$_['entry_order_status_fraud']	= 'État présumé de l\'ordre de fraude';
$_['entry_status']				= 'Statut';
$_['entry_username']			= 'clé API eWAY';
$_['entry_password']			= 'mot de passe eWAY';
$_['entry_payment_type']		= 'Type de paiement';
$_['entry_geo_zone']			= 'Zone Geo';
$_['entry_sort_order']			= 'Ordre de tri';
$_['entry_transaction_method']	= 'Méthode de transaction';

// Error
$_['error_permission']			= 'AVERTISSEMENT: vous n\'avez pas l\'autorisation de modifier le module de paiement eWAY';
$_['error_username']			= 'eWAY API Key est nécessaire!';
$_['error_password']			= 'eWAY mot de passe est nécessaire!';
$_['error_payment_type']		= 'Au moins un type de paiement est requis!';

// Help hints
$_['help_testmode']				= 'Réglez sur Oui pour utiliser le bac à sable eWAY.';
$_['help_username']				= 'Votre clé API eWAY à partir de votre compte MYeWAY.';
$_['help_password']				= 'Votre mot de passe API eWAY à partir de votre compte MYeWAY.';
$_['help_transaction_method']	= 'L\'autorisation n\'est disponible que pour les banques australiennes';

// Order page - payment tab
$_['text_payment_info']			= 'Informations sur le paiement';
$_['text_order_total']			= 'Total autorisé';
$_['text_transactions']			= 'Transactions';
$_['text_column_transactionid'] = 'ID de transaction eWAY';
$_['text_column_amount']		= 'Montant';
$_['text_column_type']			= 'Type';
$_['text_column_created']		= 'Créé';
$_['text_total_captured']		= 'Total capturé';
$_['text_capture_status']		= 'Paiement capturé';
$_['text_void_status']			= 'Paiement annulé';
$_['text_refund_status']		= 'Paiement remboursé';
$_['text_total_refunded']		= 'Total remboursé';
$_['text_refund_success']		= 'Remboursement réussi!';
$_['text_capture_success']		= 'Capture a réussi!';
$_['text_refund_failed']		= 'Échec du remboursement: ';
$_['text_capture_failed']		= 'Échec de la capture: ';
$_['text_unknown_failure']		= 'Ordre ou montant non valide';

$_['text_confirm_capture']		= 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_release']		= 'Êtes-vous sûr de vouloir libérer le paiement?';
$_['text_confirm_refund']		= 'Êtes-vous sûr de vouloir rembourser le paiement?';

$_['text_empty_refund']			= 'Veuillez entrer un montant à rembourser';
$_['text_empty_capture']		= 'Veuillez saisir un montant à capturer';

$_['btn_refund']				= 'Remboursement';
$_['btn_capture']				= 'Capture';

// Validation Error codes
$_['text_card_message_V6000']	= 'Erreur de validation non définie';
$_['text_card_message_V6001'] 	= 'IP client non valide';
$_['text_card_message_V6002'] 	= 'DeviceID non valide';
$_['text_card_message_V6011'] 	= 'Montant non valide';
$_['text_card_message_V6012'] 	= 'Description de la facture invalide';
$_['text_card_message_V6013'] 	= 'Numéro de facture invalide';
$_['text_card_message_V6014'] 	= 'Référence de facture non valide';
$_['text_card_message_V6015'] 	= 'Code devise non valide';
$_['text_card_message_V6016'] 	= 'Paiement requis';
$_['text_card_message_V6017'] 	= 'Code de devise de paiement requis';
$_['text_card_message_V6018'] 	= 'Code de devise de paiement inconnu';
$_['text_card_message_V6021'] 	= 'Nom du détenteur de carte requis';
$_['text_card_message_V6022'] 	= 'Numéro de carte requis';
$_['text_card_message_V6023'] 	= 'CVN requis';
$_['text_card_message_V6031'] 	= 'Numéro de carte invalide';
$_['text_card_message_V6032'] 	= 'CVN non valide';
$_['text_card_message_V6033'] 	= 'Date d\'expiration invalide';
$_['text_card_message_V6034'] 	= 'Numéro d\'émission invalide';
$_['text_card_message_V6035'] 	= 'Date de début non valide';
$_['text_card_message_V6036'] 	= 'Mois non valide';
$_['text_card_message_V6037'] 	= 'Année non valide';
$_['text_card_message_V6040'] 	= 'ID de client Token non valide';
$_['text_card_message_V6041'] 	= 'Client requis';
$_['text_card_message_V6042'] 	= 'Prénom du client requis';
$_['text_card_message_V6043'] 	= 'Nom de famille requis par le client';
$_['text_card_message_V6044'] 	= 'Code pays du client requis';
$_['text_card_message_V6045'] 	= 'Titre du client requis';
$_['text_card_message_V6046'] 	= 'ID client Token requis';
$_['text_card_message_V6047'] 	= 'RedirectUrl requis';
$_['text_card_message_V6051'] 	= 'Prénom non valide';
$_['text_card_message_V6052'] 	= 'Nom de famille non valide';
$_['text_card_message_V6053'] 	= 'Code de pays non valide';
$_['text_card_message_V6054'] 	= 'E-mail invalide';
$_['text_card_message_V6055'] 	= 'Téléphone invalide';
$_['text_card_message_V6056'] 	= 'Mobile invalide';
$_['text_card_message_V6057'] 	= 'Télécopie invalide';
$_['text_card_message_V6058'] 	= 'Titre non valide';
$_['text_card_message_V6059'] 	= 'URL de redirection non valide';
$_['text_card_message_V6060'] 	= 'URL de redirection non valide';
$_['text_card_message_V6061'] 	= 'Référence non valide';
$_['text_card_message_V6062'] 	= 'Nom de société invalide';
$_['text_card_message_V6063'] 	= 'Description de poste invalide';
$_['text_card_message_V6064'] 	= 'Rue1 non valide';
$_['text_card_message_V6065'] 	= 'Street2 non valide';
$_['text_card_message_V6066'] 	= 'Ville invalide';
$_['text_card_message_V6067'] 	= 'État non valide';
$_['text_card_message_V6068'] 	= 'Non valide';
$_['text_card_message_V6069'] 	= 'E-mail invalide';
$_['text_card_message_V6070'] 	= 'Téléphone invalide';
$_['text_card_message_V6071'] 	= 'Mobile invalide';
$_['text_card_message_V6072'] 	= 'Commentaires non valides';
$_['text_card_message_V6073'] 	= 'Télécopie invalide';
$_['text_card_message_V6074'] 	= 'URL non valide';
$_['text_card_message_V6075'] 	= 'Adresse de livraison non valide prénom';
$_['text_card_message_V6076'] 	= 'Adresse de livraison non valide nom de famille';
$_['text_card_message_V6077'] 	= 'Adresse de livraison non valide Rue1';
$_['text_card_message_V6078'] 	= 'Adresse de livraison non valide Street2';
$_['text_card_message_V6079'] 	= 'Adresse de livraison non valide ville';
$_['text_card_message_V6080'] 	= 'État d\'adresse de livraison non valide';
$_['text_card_message_V6081'] 	= 'Adresse de livraison non valide postale';
$_['text_card_message_V6082'] 	= 'Adresse de livraison non valide email';
$_['text_card_message_V6083'] 	= 'Téléphone d\'adresse d\'expédition invalide';
$_['text_card_message_V6084'] 	= 'Pays d\'adresse de livraison invalide';
$_['text_card_message_V6091'] 	= 'Code de pays inconnu';
$_['text_card_message_V6100'] 	= 'Nom de carte invalide';
$_['text_card_message_V6101'] 	= 'Mois d\'expiration de carte invalide';
$_['text_card_message_V6102'] 	= 'Année d\'expiration de carte invalide';
$_['text_card_message_V6103'] 	= 'Mois de début de carte invalide';
$_['text_card_message_V6104'] 	= 'Année de début de carte invalide';
$_['text_card_message_V6105'] 	= 'Numéro d\'émission de carte invalide';
$_['text_card_message_V6106'] 	= 'Carte non valide CVN';
$_['text_card_message_V6107'] 	= 'Code non valide';
$_['text_card_message_V6108'] 	= 'CustomerHostAddress non valide';
$_['text_card_message_V6109'] 	= 'UserAgent non valide';
$_['text_card_message_V6110'] 	= 'Numéro de carte invalide';
$_['text_card_message_V6111'] 	= 'Accès non autorisé aux API, compte non certifié PCI';
$_['text_card_message_V6112'] 	= 'Détails de carte redondants autres que l\'année d\'expiration et le mois';
$_['text_card_message_V6113'] 	= 'Transaction non valide pour remboursement';
$_['text_card_message_V6114'] 	= 'Erreur de validation de passerelle';
$_['text_card_message_V6115'] 	= 'DirectRefundRequest non valide, ID de transaction';
$_['text_card_message_V6116'] 	= 'Données de carte non valides sur TransactionId d\'origine';
$_['text_card_message_V6124'] 	= 'Éléments de ligne non valides. Les lignes de facturation ont été fournies mais les totaux ne correspondent pas au champ TotalAmount';
$_['text_card_message_V6125'] 	= 'Type de paiement sélectionné non activé';
$_['text_card_message_V6126'] 	= 'Numéro de carte crypté invalide, le décryptage a échoué';
$_['text_card_message_V6127'] 	= 'CVN crypté non valide, le décryptage a échoué';
$_['text_card_message_V6128'] 	= 'Méthode non valide pour le type de paiement';
$_['text_card_message_V6129'] 	= 'Transaction n\'a pas été autorisée pour la capture/annulation';
$_['text_card_message_V6130'] 	= 'Erreur générique d\'information du client';
$_['text_card_message_V6131'] 	= 'Erreur générique d\'expédition d\'informations';
$_['text_card_message_V6132'] 	= 'La transaction a déjà été achevée ou annulée, l\'opération n\'est pas autorisée';
$_['text_card_message_V6133'] 	= 'Checkout non disponible pour le type de paiement';
$_['text_card_message_V6134'] 	= 'ID de transaction auth invalide pour capture/void';
$_['text_card_message_V6135'] 	= 'Paypal erreur de traitement de remboursement';
$_['text_card_message_V6140'] 	= 'Le compte marchand est suspendu';
$_['text_card_message_V6141'] 	= 'Détails de compte PayPal non valides ou signature API';
$_['text_card_message_V6142'] 	= 'Autoriser non disponible pour la Banque/succursale';
$_['text_card_message_V6150'] 	= 'Montant du remboursement non valide';
$_['text_card_message_V6151'] 	= 'Montant du remboursement supérieur à la transaction originale';
$_['text_card_message_D4406'] 	= 'Erreur inconnue';
$_['text_card_message_S5010'] 	= 'Erreur inconnue';