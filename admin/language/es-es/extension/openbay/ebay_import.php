<?php
// Heading
$_['heading_title']              = 'Importar Artículos';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'eBay';

// Text
$_['text_sync_import_line1']     = '<strong>Error.</strong> Esto importará todos los productos de eBay y creará una estructura de categoría en la tienda. Se recomienda eliminar todas las categorías y productos antes de ejecutar esta acción. <br />La estructura de la categoría pertenece a las categorías normales de eBay, no a las categorías de la tienda (si se dispone de una tienda de eBay). Se pueden renombrar, eliminar y editar las categorías importadas sin afectar los productos de eBay.';
$_['text_sync_import_line3']     = 'Asegurarse que el servidor pueda aceptar y procesar grandes tamaños de datos POST. 1000 artículos de eBay tienen un tamaño aproximado de 40Mb. Si la llamada falla, es probable que la configuración sea demasiado pequeña. El límite de memoria PHP debe ser de aproximadamente 128 MB.';
$_['text_sync_server_size']      = 'Actualmente el Servidor puede aceptar: ';
$_['text_sync_memory_size']      = 'El Límite de memeoria PHP: ';
$_['text_import_confirm']		 = 'Se importarán todos los artículos de eBay como nuevos productos, ¿Seguro? Esta Acción no puede Deshacerse. Asegurarse de realizar antes un Backup.';
$_['text_import_notify']		 = 'La solicitud de importación ha sido enviada para su procesamiento. Una importación tarda aproximadamente 1 hora por cada 1000 artículos.';
$_['text_import_images_msg1']    = 'imágenes pendientes de importar/copiar de eBay. Actualizar la Página, si el Número no disminuye';
$_['text_import_images_msg2']    = 'cliquear aquí';
$_['text_import_images_msg3']    = 'y esperar. Para más información cliquear <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">aquí</a>.';

// Entry
$_['entry_import_item_advanced'] = 'Obtener Datos Avanzados';
$_['entry_import_categories']    = 'Importar categorías';
$_['entry_import_description']	 = 'Importar Descripción de Artículos';
$_['entry_import']				 = 'Importar Artículos eBay';

// Buttons
$_['button_import']				 = 'Importar';
$_['button_complete']			 = 'Completado';

// Help
$_['help_import_item_advanced']  = 'Tomará hasta 10 veces más tiempo para importar artículos. Importa pesos, tamaños, ISBN y Disponiblidad.';
$_['help_import_categories']     = 'Crea una estructura de categoría en la tienda desde las categorías de eBay.';
$_['help_import_description']    = 'ESto importará todo, inlucyendo HTML, contador de visitas, etc.';

// Error
$_['error_import']               = 'Falló la Carga';
$_['error_maintenance']			 = 'La Tienda está en Modo Mantenimiento. La Importación fallará.';
$_['error_ajax_load']			 = 'Falló la Conexión con el Servidor.';
$_['error_validation']			 = 'Se debe registrar para obtener un API Token y habilitar el Módulo.';