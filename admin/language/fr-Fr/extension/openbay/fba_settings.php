<?php
// Headings
$_['heading_title']        	   = 'Paramètres';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Accomplissement par Amazon';

// Text
$_['text_success']     		   = 'Vos paramètres ont été sauvegardés';
$_['text_status']         	   = 'Statut';
$_['text_account_ok']  		   = 'Connexion à l\'accomplissement par Amazon OK';
$_['text_api_ok']       	   = 'Connexion API OK';
$_['text_api_status']          = 'Connexion API';
$_['text_edit']           	   = 'Modifier l\'exécution par les paramètres Amazon';
$_['text_standard']            = 'Standard';
$_['text_expedited']           = 'Accéléré';
$_['text_priority']            = 'Priorité';
$_['text_fillorkill']          = 'Remplissez ou tuez';
$_['text_fillall']             = 'Remplissez tous les';
$_['text_fillallavailable']    = 'Remplissez tout disponible';
$_['text_prefix_warning']      = 'Ne changez pas ce paramètre après que les commandes ont été envoyées à Amazon, seulement définir ce lors de la première installation.';
$_['text_disabled_cancel']     = 'Désactivé-ne pas annuler automatiquement les exécutions';
$_['text_validate_success']    = 'Vos détails d\'API fonctionnent correctement! Vous devez appuyer sur Save pour vous assurer que les paramètres sont sauvegardés.';
$_['text_register_banner']     = 'Cliquez ici si vous avez besoin de vous inscrire à un compte';

// Entry
$_['entry_api_key']            = 'Jeton API';
$_['entry_encryption_key']     = 'Clé de cryptage 1';
$_['entry_encryption_iv']      = 'Clé de cryptage 2';
$_['entry_account_id']         = 'ID de compte';
$_['entry_send_orders']        = 'Envoyer des commandes automatiquement';
$_['entry_fulfill_policy']     = 'Politique d\'accomplissement';
$_['entry_shipping_speed']     = 'Vitesse d\'expédition par défaut';
$_['entry_debug_log']          = 'Activer l\'enregistrement de débogage';
$_['entry_new_order_status']   = 'Nouveau déclencheur de réalisation';
$_['entry_order_id_prefix']    = 'Préfixe d\'ID de commande';
$_['entry_only_fill_complete'] = 'Tous les articles doivent être FBA';

// Help
$_['help_api_key']             = 'Il s\'agit de votre jeton API, obtenir ce à partir de votre OpenBay Pro zone de compte';
$_['help_encryption_key']      = 'Il s\'agit de votre clé de cryptage #1, obtenir ce à partir de votre OpenBay Pro zone de compte';
$_['help_encryption_iv']       = 'Il s\'agit de votre clé de cryptage #2, obtenir ce à partir de votre OpenBay Pro zone de compte';
$_['help_account_id']          = 'Il s\'agit de l\'ID de compte qui correspond au compte Amazon enregistré pour OpenBay Pro, obtenir ce à partir de votre zone de compte OpenBay Pro';
$_['help_send_orders']  	   = 'Les commandes contenant l\'accomplissement correspondant par Amazon Products seront envoyées automatiquement à Amazon';
$_['help_fulfill_policy']  	   = 'La stratégie d\'exécution par défaut (FillAll-tous les éléments réalisables dans l\'ordre de traitement sont expédiées. L\'ordre d\'exécution reste dans un état de traitement jusqu\'à ce que tous les articles soient expédiés par Amazon ou annulés par le vendeur. FillAllAvailable-tous les éléments réalisables dans l\'ordre de traitement sont expédiés. Tous les articles insatisfaisants dans l\'ordre sont annulés par Amazon. FillOrKill-si un article dans un ordre d\'exécution est déterminé pour être insatisfaite avant que n\'importe quelle expédition dans l\'ordre se déplace à l\'État en attente (le processus de prélèvement des unités de l\'inventaire a commencé), puis le l\'ordre entier est considéré comme inréalisable. Toutefois, si un élément dans un ordre d\'exécution est déterminé à être insatisfaite après une expédition dans l\'ordre se déplace à l\'État en attente, Amazon annule autant de l\'ordre de traitement que possible.)';
$_['help_shipping_speed']  	   = 'Il s\'agit de la catégorie de vitesse d\'expédition par défaut à appliquer aux nouvelles commandes, différents niveaux de service peuvent encourir des coûts différents';
$_['help_debug_log']  		   = 'Les journaux de débogage consignent des informations dans un fichier journal sur les actions du module. Ceci devrait être laissé permis pour aider à trouver la cause de n\'importe quels problèmes.';
$_['help_new_order_status']    = 'Il s\'agit de l\'état de commande qui déclenchera l\'ordre à créer pour l\'accomplissement. Assurez-vous qu\'il n\'utilise un statut qu\'après avoir reçu le paiement.';
$_['help_order_id_prefix']     = 'Avoir un préfixe de commande aidera à identifier les commandes qui sont venues de votre magasin pas d\'autres intégrations. Cela est très utile lorsque les commerçants vendent sur de nombreux marchés et l\'utilisation FBA';
$_['help_only_fill_complete']  = 'Cela permettra uniquement aux commandes d\'être envoyées pour l\'exécution si tous les éléments de l\'ordre sont jumelés à un accomplissement par l\'élément Amazon. Si n\'importe quel article n\'est pas alors l\'ordre entier restera non rempli.';

// Error
$_['error_api_connect']        = 'Impossible de se connecter à l\'API';
$_['error_account_info']       = 'Impossible de vérifier la connexion API à l\'accomplissement par Amazon ';
$_['error_api_key']    		   = 'Le jeton API n\'est pas valide';
$_['error_api_account_id']     = 'L\'ID de compte n\'est pas valide';
$_['error_encryption_key']     = 'La clé de cryptage #1 n\'est pas valide';
$_['error_encryption_iv']      = 'La clé de cryptage #2 n\'est pas valide';
$_['error_validation']    	   = 'Il y a eu une erreur de validation de vos détails';

// Tabs
$_['tab_api_info']             = 'Détails de l\'API';

// Buttons
$_['button_verify']            = 'Vérifier les détails';
