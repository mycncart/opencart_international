<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Configuración';
$_['tab_order_status']              = 'Estado del Pedido';

// Text
$_['text_extension']                = 'Extensiones';
$_['text_success']                  = 'Operación Exitosa: Módulo de Pago CardConnect Modificado.';
$_['text_edit']                     = 'Editar CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Pago';
$_['text_authorize']                = 'Autorizar';
$_['text_live']                     = 'Sitio en Producción';
$_['text_test']                     = 'Sitio en Testing';
$_['text_no_cron_time']             = 'El Cron aún no ha sido ejectutado';
$_['text_payment_info']             = 'Información de Pago';
$_['text_payment_method']           = 'Método de Pago';
$_['text_card']                     = 'Tarjeta';
$_['text_echeck']                   = 'Verificación Electrónica';
$_['text_reference']                = 'Referencia';
$_['text_update']                   = 'Actualizar';
$_['text_order_total']              = 'Total de Pedido';
$_['text_total_captured']           = 'Total Capturado';
$_['text_capture_payment']          = 'Capturar Pago';
$_['text_refund_payment']           = 'Reembolsar Pago';
$_['text_void']                     = 'Anular';
$_['text_transactions']             = 'Transacciones';
$_['text_column_type']              = 'Tipo';
$_['text_column_reference']         = 'Referencia';
$_['text_column_amount']            = 'Monto';
$_['text_column_status']            = 'Estado';
$_['text_column_date_modified']     = 'Fecha Modificación';
$_['text_column_date_added']        = 'Fecha Alta';
$_['text_column_update']            = 'Actualizar';
$_['text_column_void']              = 'Anular';
$_['text_confirm_capture']          = 'Seguro de Capturar el Pago?';
$_['text_confirm_refund']           = 'Seguro de Reembolsar el Pago?';
$_['text_inquire_success']          = 'Solicitud exitosa';
$_['text_capture_success']          = 'Solicitud de Captura exitosa';
$_['text_refund_success']           = 'Solicitud de Reembolso exitoso';
$_['text_void_success']             = 'Anulación exitosa';

// Entry
$_['entry_merchant_id']             = 'Comercio ID';
$_['entry_api_username']            = 'Nombre de Usuario de API';
$_['entry_api_password']            = 'Contraseña de API';
$_['entry_token']                   = 'Token Secreto';
$_['entry_transaction']             = 'Transacción';
$_['entry_environment']             = 'Ambiente';
$_['entry_site']                    = 'Sitio';
$_['entry_store_cards']             = 'Tarjetas de la Tienda';
$_['entry_echeck']                  = 'Verificación Electrónica';
$_['entry_total']                   = 'Total';
$_['entry_geo_zone']                = 'Zona Geográfica';
$_['entry_status']                  = 'Estado';
$_['entry_logging']                 = 'Registro de Depuración';
$_['entry_sort_order']              = 'Orden';
$_['entry_cron_url']                = 'URL del Cron Job';
$_['entry_cron_time']               = 'Ultima Corrida del Cron Job';
$_['entry_order_status_pending']    = 'Pendiente';
$_['entry_order_status_processing'] = 'Procesando';

// Help
$_['help_merchant_id']              = 'ID de Mercado de la Cuenta CardConnect personal.';
$_['help_api_username']             = 'Nombre  de Usuario de la API CardConnect.';
$_['help_api_password']             = 'Contraseña de la API CardConnect API.';
$_['help_token']                    = 'Ingresar un token aleatorio para seguridad o usar el generado.';
$_['help_transaction']              = 'Elegir Pago para capturar el pago de inmediato o Autorizar para tener que aprobarlo.';
$_['help_site']                     = 'Esto determina la primer parte de la URL de la API. No cambiar a menos que se indique.';
$_['help_store_cards']              = 'Si se almacenan Tarjetas con Token.';
$_['help_echeck']                   = 'Si se ofrece la posibilidad de pagar con Verificación Electrónica.';
$_['help_total']                    = 'Total del Pedido a Alcanzar antes de que el método de pago se active. Debe ser un valor sin signo de Moneda.';
$_['help_logging']                  = 'Al habilitar la depuración, se escribirán los datos confidenciales en un archivo de registro. Siempre desactivar a menos que se indique lo contrario.';
$_['help_cron_url']                 = 'Establecer un Cron Job para llamar a esta URL para que los Pedidoss se actualicen automáticamente. Está diseñado para ejecutarse unas horas después de la última captura de un día hábil.';
$_['help_cron_time']                = 'Ultima vez que el Cron Job se ejecutó.';
$_['help_order_status_pending']     = 'Estado del Pedido cuando fue autorizadopor el Comerciante.';
$_['help_order_status_processing']  = 'Estado del Pedido cuando fue automáticamente capturado.';

// Button
$_['button_inquire_all']            = 'Consultar Todos';
$_['button_capture']                = 'Capturar';
$_['button_refund']                 = 'Reembolso';
$_['button_void_all']               = 'Anular Todos';
$_['button_inquire']                = 'Consultar';
$_['button_void']                   = 'Anular';

// Error
$_['error_permission']              = 'Error: Sin permiso para modificar Pago CardConnect.';
$_['error_merchant_id']             = 'Comercio ID Obligatorio.';
$_['error_api_username']            = 'Nombre de Usuario de API Obligatorio.';
$_['error_api_password']            = 'Contraseña de API Obligatoria.';
$_['error_token']                   = 'Token Secreto Obligatorio.';
$_['error_site']                    = 'Sitio Obligatorio.';
$_['error_amount_zero']             = 'El Monto debe ser mayor que 0.';
$_['error_no_order']                = 'Sin Información coincidente de Pedido.';
$_['error_invalid_response']        = 'Respuesta Inválida Recibida.';
$_['error_data_missing']            = 'Datos perdidos.';
$_['error_not_enabled']             = 'Módulo no habilitado.';