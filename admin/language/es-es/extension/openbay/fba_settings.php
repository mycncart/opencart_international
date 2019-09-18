<?php
// Headings
$_['heading_title']        	   = 'Configuración';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Cumplimiento por parte de Amazon';

// Text
$_['text_success']     		   = 'Configuración Guardada.';
$_['text_status']         	   = 'Estado';
$_['text_account_ok']  		   = 'Conexión con Cumplimiento por parte de Amazon OK';
$_['text_api_ok']       	   = 'Conexión API OK';
$_['text_api_status']          = 'Conexión API';
$_['text_edit']           	   = 'Editar Configuración de Cumplimiento por parte de Amazon';
$_['text_standard']            = 'Estándard';
$_['text_expedited']           = 'Acelerado';
$_['text_priority']            = 'Prioridad';
$_['text_fillorkill']          = 'Completar o Matar';
$_['text_fillall']             = 'Completar Todos';
$_['text_fillallavailable']    = 'Completar Todos  los Disponibles';
$_['text_prefix_warning']      = 'No cambiar esta configuración después de que se hayan enviado pedidos a Amazon, solo configúrarlo al instalar por primera vez.';
$_['text_disabled_cancel']     = 'Deshabilitado - no cancelar automáticamente los cumplimientos.';
$_['text_validate_success']    = 'Los detalles de la API está trabajando correctamente. Guardar para asegurarse que la configuración esté guardada.';
$_['text_register_banner']     = 'Cliquear aquí si se necesita registrar una cuenta.';

// Entry
$_['entry_api_key']            = 'API token';
$_['entry_encryption_key']     = 'Key Encriptada 1';
$_['entry_encryption_iv']      = 'Key Encriptada 2';
$_['entry_account_id']         = 'Cuenta ID';
$_['entry_send_orders']        = 'Enviar Pedidos Automáticamente';
$_['entry_fulfill_policy']     = 'Política de Cumplimiento';
$_['entry_shipping_speed']     = 'Velocidad por Defecto de Envío';
$_['entry_debug_log']          = 'Habilitar el registro de depuración';
$_['entry_new_order_status']   = 'Nuevo Disparador de cumplimiento';
$_['entry_order_id_prefix']    = 'Prefijo de ID de Pedido';
$_['entry_only_fill_complete'] = 'Todos los Artículos deben ser FBA';

// Help
$_['help_api_key']             = 'Este es el token API, obtenerlo desde el área de cuenta OpenBay Pro.';
$_['help_encryption_key']      = 'Esta es la clave Encriptada #1, obtenerla desde el área de cuenta OpenBay Pro.';
$_['help_encryption_iv']       = 'Esta es la clave Encriptada #2, obtenerla desde el área de cuenta OpenBay Pro.';
$_['help_account_id']          = 'Esta es la identificación de la cuenta que coincide con la cuenta registrada de Amazon para OpenBay Pro, obtener ésto desde el área de cuenta OpenBay Pro.';
$_['help_send_orders']  	   = 'Los pedidos que concuerden con el cumplimiento de los productos de Amazon se enviarán a Amazon automáticamente.';
$_['help_fulfill_policy']  	   = 'La política de cumplimiento predeterminada (FillAll: se envían todos los artículos que se pueden completar en la orden de despacho. La orden de despacho de aduana permanece en estado de procesamiento hasta que Amazon envíe todos los artículos o el vendedor los cancele. FillAllAvailable: se envían todos los artículos que cumplen con el pedido de despacho Todos los artículos no cumplibles en el pedido son cancelados por Amazon.FillOrKill: si se determina que un artículo en un pedido de envío no se puede llenar antes de que cualquier envío del pedido pase al estado Pendiente (el proceso de recolección de unidades del inventario haya comenzado), entonces no se puede completar el pedido completo. Sin embargo, si se determina que un artículo en un pedido de cumplimiento no se puede llenar después de que un envío en el pedido pasa al estado Pendiente, Amazon cancela la mayor cantidad posible del pedido de despacho).';
$_['help_shipping_speed']  	   = 'Esta es la categoría de velocidad de envío predeterminada para aplicar a pedidos nuevos, los diferentes niveles de servicio pueden incurrir en costos diferentes.';
$_['help_debug_log']  		   = 'Los registros de depuración registrarán información en un archivo de registro sobre las acciones que realiza el módulo. Esto debería dejarse habilitado para ayudar a encontrar la causa de cualquier problema.';
$_['help_new_order_status']    = 'Este es el estado de la orden que activará la orden que se creará para el cumplimiento. Asegurarse de que ésto esté usando un estado solo después de haber recibido el pago.';
$_['help_order_id_prefix']     = 'Tener un prefijo de pedido ayudará a identificar los pedidos que provienen de la Tienda y no de otras integraciones. Esto es muy útil cuando los comerciantes venden en muchos mercados y usan FBA.';
$_['help_only_fill_complete']  = 'Esto solo permitirá que los pedidos se envíen para su cumplimiento si TODOS los artículos en el pedido coinciden con un artículo de Fulfillment by Amazon. Si no hay ningún artículo, el pedido completo permanecerá sin cubrir.';

// Error
$_['error_api_connect']        = 'Falló la Conexión con la API.';
$_['error_account_info']       = 'Imposible verificar la Conexión con la API de Cumplimiento por parte de Amazon. ';
$_['error_api_key']    		   = 'El API token es Inválido.';
$_['error_api_account_id']     = 'El ID de Cuenta es Inválido.';
$_['error_encryption_key']     = 'Key Encriptada #1 Inválida.';
$_['error_encryption_iv']      = 'Key Encriptada #2 Inválida.';
$_['error_validation']    	   = 'Hay Errores al Validar los Detalles.';

// Tabs
$_['tab_api_info']             = 'Detalles de API';

// Buttons
$_['button_verify']            = 'Verificar detalles';