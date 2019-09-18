<?php
// Heading
$_['heading_title']				= 'Pago eWAY';

// Text
$_['text_extension']			= 'Extensiones';
$_['text_success']				= 'Operación Exitosa: Detalles de eWAY.';
$_['text_edit']					= 'Editar eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Autorización';
$_['text_sale']					= 'Venta';
$_['text_transparent']			= 'Redirección Transparente (Formulario de Pago en el sitio)';
$_['text_iframe']				= 'IFrame (Formulario de Pago en Ventana)';

// Entry
$_['entry_paymode']				= 'Modo de Pago';
$_['entry_test']				= 'Modo Testing';
$_['entry_order_status']		= 'Estado del Pedido';
$_['entry_order_status_refund'] = 'Estado de Pedido Reembolsado';
$_['entry_order_status_auth']	= 'Estado de Pedido Autorizado';
$_['entry_order_status_fraud']	= 'Estado Sospechoso de Fraude del Pedido';
$_['entry_status']				= 'Estado';
$_['entry_username']			= 'API Key eWAY';
$_['entry_password']			= 'Contraseña eWAY';
$_['entry_payment_type']		= 'Tipo de Pago';
$_['entry_geo_zone']			= 'Zona Geográfica';
$_['entry_sort_order']			= 'Orden';
$_['entry_transaction_method']	= 'Método de Transacción';

// Error
$_['error_permission']			= 'Error: Sin permiso para modificar el Módulo de Pago eWAY.';
$_['error_username']			= 'API Ke eWAY Obligatoria.';
$_['error_password']			= 'Contraseña eWAY Obligatoria.';
$_['error_payment_type']		= 'Al menos un tipo de pago es Obligatorio.';

// Help hints
$_['help_testmode']				= 'Setear a Si para usar el Sandbox de eWAY.';
$_['help_username']				= 'API KeyeWAY de la Cuenta MYeWAY.';
$_['help_password']				= 'Contraseña de la API de la Cuenta MYeWAY.';
$_['help_transaction_method']	= 'Authorisation is only available for Australian banks';

// Order page - payment tab
$_['text_payment_info']			= 'Información de Pago';
$_['text_order_total']			= 'Total Autorizado';
$_['text_transactions']			= 'Transacciones';
$_['text_column_transactionid'] = 'Transacción ID eWAY';
$_['text_column_amount']		= 'Monto';
$_['text_column_type']			= 'Tipo';
$_['text_column_created']		= 'Creado';
$_['text_total_captured']		= 'Total Capturado';
$_['text_capture_status']		= 'Pago Capturado';
$_['text_void_status']			= 'Pago Anulado';
$_['text_refund_status']		= 'Pago Devuelto';
$_['text_total_refunded']		= 'Total Devuelto';
$_['text_refund_success']		= 'Reembolso exitoso.';
$_['text_capture_success']		= 'Captura exitosa';
$_['text_refund_failed']		= 'Reembolso Fallido: ';
$_['text_capture_failed']		= 'Captura Fallida: ';
$_['text_unknown_failure']		= 'Pedido o Monto Inválido';

$_['text_confirm_capture']		= 'Seguro de Capturar el Pago?';
$_['text_confirm_release']		= 'Seguro de Liberar el Pago?';
$_['text_confirm_refund']		= 'Seguro de Reembolsar el Pago?';

$_['text_empty_refund']			= 'Ingresar el Monto a Devolver';
$_['text_empty_capture']		= 'Ingresar el Monto a Capturar';

$_['btn_refund']				= 'Reembolso';
$_['btn_capture']				= 'Captura';

// Validation Error codes
$_['text_card_message_V6000']	= 'Validación de Error no definida.';
$_['text_card_message_V6001'] 	= 'IP del Cliente Inválida.';
$_['text_card_message_V6002'] 	= 'ID del Dispositivo Inválido.';
$_['text_card_message_V6011'] 	= 'Monto Inválido.';
$_['text_card_message_V6012'] 	= 'Descripción de la Factura Inválida.';
$_['text_card_message_V6013'] 	= 'Número de Factura Inválida.';
$_['text_card_message_V6014'] 	= 'Referencia de Factura Inválida.';
$_['text_card_message_V6015'] 	= 'Código de Moneda Inválido.';
$_['text_card_message_V6016'] 	= 'Pago Obligatorio.';
$_['text_card_message_V6017'] 	= 'Código de Moneda de Pago Obligatorio.';
$_['text_card_message_V6018'] 	= 'Código de Moneda de Pago Desconocido.';
$_['text_card_message_V6021'] 	= 'Nombre del Titular de la Tarjeta Obligatorio.';
$_['text_card_message_V6022'] 	= 'Número de Tarjeta Obligatorio.';
$_['text_card_message_V6023'] 	= 'CVN Obligatorio.';
$_['text_card_message_V6031'] 	= 'Número de Tarjeta Inválido.';
$_['text_card_message_V6032'] 	= 'CVN Inválido.';
$_['text_card_message_V6033'] 	= 'Fecha de Expiración Inválida.';
$_['text_card_message_V6034'] 	= 'Número de Emisión Inválido.';
$_['text_card_message_V6035'] 	= 'Fecha de Inicio Inválida.';
$_['text_card_message_V6036'] 	= 'Mes Inválido.';
$_['text_card_message_V6037'] 	= 'Año Inválido.';
$_['text_card_message_V6040'] 	= 'ID Token de Cliente Inválido.';
$_['text_card_message_V6041'] 	= 'Cliente Obligatorio.';
$_['text_card_message_V6042'] 	= 'Nombre del Cliente Obligatorio.';
$_['text_card_message_V6043'] 	= 'Apellido del Cliente Obligatorio.';
$_['text_card_message_V6044'] 	= 'Código de País del Cliente Obligatorio.';
$_['text_card_message_V6045'] 	= 'Título de Cliente Obligatorio.';
$_['text_card_message_V6046'] 	= 'ID de Token de Cliente Obligatorio.';
$_['text_card_message_V6047'] 	= 'URL de Redirección Obligatoria.';
$_['text_card_message_V6051'] 	= 'Nombre Inválido.';
$_['text_card_message_V6052'] 	= 'Apellido Inválido.';
$_['text_card_message_V6053'] 	= 'Código de País Inválido.';
$_['text_card_message_V6054'] 	= 'Email Inválido.';
$_['text_card_message_V6055'] 	= 'Teléfono Inválido.';
$_['text_card_message_V6056'] 	= 'Teléfono Móvil Inválido.';
$_['text_card_message_V6057'] 	= 'Fax Inválido.';
$_['text_card_message_V6058'] 	= 'Título Inválido.';
$_['text_card_message_V6059'] 	= 'URL de Redirección Inválida.';
$_['text_card_message_V6060'] 	= 'URL de Redirección Inválida.';
$_['text_card_message_V6061'] 	= 'Referencia Inválida.';
$_['text_card_message_V6062'] 	= 'Nombre de Empresa Inválido.';
$_['text_card_message_V6063'] 	= 'Descripción de Trabajo Inválida.';
$_['text_card_message_V6064'] 	= 'Calle 1 Inválida.';
$_['text_card_message_V6065'] 	= 'Calle 2 Inválida.';
$_['text_card_message_V6066'] 	= 'Ciduad Inválida.';
$_['text_card_message_V6067'] 	= 'Provincia Inválida.';
$_['text_card_message_V6068'] 	= 'Código Postal Inválido.';
$_['text_card_message_V6069'] 	= 'Email Inválido.';
$_['text_card_message_V6070'] 	= 'Teléfono Inválido.';
$_['text_card_message_V6071'] 	= 'Teléfono Móvil Inválido.';
$_['text_card_message_V6072'] 	= 'Comentarios Inválidos.';
$_['text_card_message_V6073'] 	= 'Fax Inválido.';
$_['text_card_message_V6074'] 	= 'URL Inválida.';
$_['text_card_message_V6075'] 	= 'Nombre de la Dirección de Envío Inválido.';
$_['text_card_message_V6076'] 	= 'Apellido de la Dirección de Envío Inválido.';
$_['text_card_message_V6077'] 	= 'Calle 1 de la Dirección de Envío Inválida.';
$_['text_card_message_V6078'] 	= 'Calle 2 de la Dirección de Envío Inválida.';
$_['text_card_message_V6079'] 	= 'Ciudad de la Dirección de Envío Inválida.';
$_['text_card_message_V6080'] 	= 'Provincia/Estado de la Dirección de Envío Inválida.';
$_['text_card_message_V6081'] 	= 'Código Postal de la Dirección de Envío Inválido.';
$_['text_card_message_V6082'] 	= 'Email de la Dirección de Envío Inválido.';
$_['text_card_message_V6083'] 	= 'Teléfono de la Dirección de Envío Inválido.';
$_['text_card_message_V6084'] 	= 'País de la Dirección de Envío Inválido.';
$_['text_card_message_V6091'] 	= 'Código de País Desconocido.';
$_['text_card_message_V6100'] 	= 'Nombre de la Tarjeta Inválido.';
$_['text_card_message_V6101'] 	= 'Mes de Expiración de la Tarjeta Inválido.';
$_['text_card_message_V6102'] 	= 'Año de Expiración de la Tarjeta Inválido.';
$_['text_card_message_V6103'] 	= 'Mes de Inicio de la Tarjeta Inválido.';
$_['text_card_message_V6104'] 	= 'Año de Inicio de la Tarjeta Inválido.';
$_['text_card_message_V6105'] 	= 'Número de Emisión de Tarjeta Inválido.';
$_['text_card_message_V6106'] 	= 'CVN de Tarjeta Inválido.';
$_['text_card_message_V6107'] 	= 'Código de Acceso Inválido.';
$_['text_card_message_V6108'] 	= 'Dirección de Host del Cliente Inválida.';
$_['text_card_message_V6109'] 	= 'Usuario Agente Inválido.';
$_['text_card_message_V6110'] 	= 'Número de Tarjeta Inválido.';
$_['text_card_message_V6111'] 	= 'Acceso a la API no Autorizado, la Cuenta no tiene certificaficado PCI.';
$_['text_card_message_V6112'] 	= 'Detalles de Tarjeta Redundante distintos del Año y Mes de Vencimiento.';
$_['text_card_message_V6113'] 	= 'Transacción Inválida para el Reembolso.';
$_['text_card_message_V6114'] 	= 'Error de Validación de la Puerta de Enlace.';
$_['text_card_message_V6115'] 	= 'DirectRefundRequest Inválido, Transacción ID.';
$_['text_card_message_V6116'] 	= 'Datos de Tarjeta Inválidos en el ID de Transacción Original.';
$_['text_card_message_V6124'] 	= 'Línea de Items Inválida. La Línea de Items se ha proporcionado, sin embargo el Total no coincide con el Campo Monto Total.';
$_['text_card_message_V6125'] 	= 'El Tipo de Pago Seleccionado no está habilitado.';
$_['text_card_message_V6126'] 	= 'Número Encriptado de Tarjeta Inválido, Desencriptación Fallida.';
$_['text_card_message_V6127'] 	= 'CVN Encriptado Inválido, Desencriptación Fallida.';
$_['text_card_message_V6128'] 	= 'Tipo de Método de Pago Inválido.';
$_['text_card_message_V6129'] 	= 'La Transacción no ha sido Autorizada para Captura/Cancelación.';
$_['text_card_message_V6130'] 	= 'Error de Información de Cliente Genérico.';
$_['text_card_message_V6131'] 	= 'Error de Información de Envío Genérico.';
$_['text_card_message_V6132'] 	= 'La Transacción ya ha sido completada o anulada, Operación no permitida.';
$_['text_card_message_V6133'] 	= 'El Checkout no está disponible para este tipo de Pago.';
$_['text_card_message_V6134'] 	= 'ID de Transacción de autenticación Inválido para Captura/Anulación.';
$_['text_card_message_V6135'] 	= 'Error de Procesamiento de Reemboso PayPal.';
$_['text_card_message_V6140'] 	= 'Cuenta del Comercio Suspendida.';
$_['text_card_message_V6141'] 	= 'Detalles de cuenta de PayPal o firma de API Inválidos.';
$_['text_card_message_V6142'] 	= 'Autorización no disponible para el Banco/Sucursal.';
$_['text_card_message_V6150'] 	= 'Monto de Reembolso Inválido';
$_['text_card_message_V6151'] 	= 'El Monto de Reembolso es mayor que la Transaccián Original.';
$_['text_card_message_D4406'] 	= 'Error Desconocido';
$_['text_card_message_S5010'] 	= 'Error Desconodido';