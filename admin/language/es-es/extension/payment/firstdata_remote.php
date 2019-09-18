<?php
// Heading
$_['heading_title']					 = 'API del Servicio Web First Data EMEA';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']				 = 'Extensiones';
$_['text_success']					 = 'Operación Exitosa: Detalles de Cuenta First Data.';
$_['text_edit']                      = 'Editar API del Servicio Web First Data EMEA';
$_['text_card_type']				 = 'Tipo de Tarjeta';
$_['text_enabled']					 = 'Habilitado';
$_['text_merchant_id']				 = 'Comercio ID';
$_['text_subaccount']				 = 'SubCuenta';
$_['text_user_id']					 = 'Usuario ID';
$_['text_capture_ok']				 = 'Captura Exitosa';
$_['text_capture_ok_order']			 = 'Captura Exitosa, estado del Pedido Actualizado - Liquidado';
$_['text_refund_ok']				 = 'Devolución Exitosa';
$_['text_refund_ok_order']			 = 'Devolución Exitosa, estado del Pedido Actualizado';
$_['text_void_ok']					 = 'Anulación Exitosa, estado del Pedido Actualizado';
$_['text_settle_auto']				 = 'Venta';
$_['text_settle_delayed']			 = 'Pre Autorización';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Información de Pago';
$_['text_capture_status']			 = 'Pago Capturado';
$_['text_void_status']				 = 'Pago Anulado';
$_['text_refund_status']			 = 'Pago Devuelto';
$_['text_order_ref']				 = 'Referencia de Pedido';
$_['text_order_total']				 = 'Total Autorizado';
$_['text_total_captured']			 = 'Total Capturado';
$_['text_transactions']				 = 'Transacciones';
$_['text_column_amount']			 = 'Monto';
$_['text_column_type']				 = 'Tipo';
$_['text_column_date_added']		 = 'Creado';
$_['text_confirm_void']				 = 'Seguro de Anular el Pago?';
$_['text_confirm_capture']			 = 'Seguro de Capturar el Pago?';
$_['text_confirm_refund']			 = 'Seguro de Reembolsar el Pago?';

// Entry
$_['entry_certificate_path']		 = 'Ruta del Certificado';
$_['entry_certificate_key_path']	 = 'Ruta de la Key Privada';
$_['entry_certificate_key_pw']		 = 'Contraseña de la Key Privada';
$_['entry_certificate_ca_path']		 = 'Ruta CA';
$_['entry_merchant_id']				 = 'Comercio ID';
$_['entry_user_id']					 = 'Usuario ID';
$_['entry_password']				 = 'Contraseña';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Orden';
$_['entry_geo_zone']				 = 'Zona Geográfica';
$_['entry_status']					 = 'Estado';
$_['entry_debug']					 = 'Registro de Depuración';
$_['entry_auto_settle']				 = 'Tipo de Liquidación';
$_['entry_status_success_settled']	 = 'Operación Exitosa - Liquidado';
$_['entry_status_success_unsettled'] = 'Operación Exitosa - No Liquidado';
$_['entry_status_decline']			 = 'Declinado';
$_['entry_status_void']				 = 'Anulado';
$_['entry_status_refund']			 = 'Reintegrado';
$_['entry_enable_card_store']		 = 'Habilitar Tokens de Almacenamiento de Tarjeta';
$_['entry_cards_accepted']			 = 'Tipos de Tarjetas Aceptadas';

// Help
$_['help_total']					 = 'Total del Pedido a Alcanzar antes de que el método de pago se active.';
$_['help_certificate']				 = 'Los Certificados y Keys Privados deben ser almacenados fuera del directorio público de la Web.';
$_['help_card_select']				 = 'Preguntar al Usuario el Tipo de Tarjeta antes de ser redireccionado.';
$_['help_notification']				 = 'Se necesita proporcionar la URL de First Data para las Notificaciones de Pago.';
$_['help_debug']					 = 'Al habilitar la depuración, se escribirán los datos confidenciales en un archivo de registro. Siempre desactivar a menos que se indique lo contrario .';
$_['help_settle']					 = 'Si se utiliza la pre-autenticación, se debe completar una acción posterior a la autenticación dentro de los 3-5 días, de lo contrario, su transacción se perderá';

// Tab
$_['tab_account']					 = 'Información de la API';
$_['tab_order_status']				 = 'Estado del Pedido';
$_['tab_payment']					 = 'Configuraciones de Pago';

// Button
$_['button_capture']				 = 'Capturar';
$_['button_refund']					 = 'Reembolso';
$_['button_void']					 = 'Anular';

// Error
$_['error_merchant_id']				 = 'Comercio ID Obligatorio.';
$_['error_user_id']					 = 'Usuario ID Obligatorio.';
$_['error_password']				 = 'Contraseña Obligatoria.';
$_['error_certificate']				 = 'Ruta del Certificado Obligatoria.';
$_['error_key']						 = 'Key del Certificado Obligatoria.';
$_['error_key_pw']					 = 'Contraseña de la key del Certificado Obligatoria.';
$_['error_ca']						 = 'Autorización del Certificado (CA) Obligatoria.';