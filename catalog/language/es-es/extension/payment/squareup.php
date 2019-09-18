<?php
// Text
$_['text_new_card']                     = '+ Agregar Nueva Tarjeta';
$_['text_loading']                      = 'Cargando... Esperar...';
$_['text_card_details']                 = 'Detalles de la Tarjeta';
$_['text_saved_card']                   = 'Usar Tarjeta Guardada:';
$_['text_card_ends_in']                 = 'Pagar con la Tarjeta Existente %s que termina en XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Número de Tarjeta:';
$_['text_card_expiry']                  = 'Expiración de la Tarjeta (MM/YY):';
$_['text_card_cvc']                     = 'Código de Seguridad de la Tarjeta (CVC):';
$_['text_card_zip']                     = 'Código Postal de la Tarjeta:';
$_['text_card_save']                    = 'Guardar la Tarjeta para Usos Futuros?';
$_['text_trial']                        = '%s cada %s %s para %s pagos luego ';
$_['text_recurring']                    = '%s cada %s %s';
$_['text_length']                       = ' cada %s pagos';
$_['text_cron_subject']                 = 'Resumen del Trabajo Square CRON';
$_['text_cron_message']                 = 'Aquí hay una lista de todas las tareas CRON realizadas por la extensión Square:';
$_['text_squareup_profile_suspended']   = ' Los Pagos Recurrentes han sido Suspendidos. Contactar para obtener mayor información.';
$_['text_squareup_trial_expired']       = ' El Periodo de Prueba ha Expirado.';
$_['text_squareup_recurring_expired']   = ' Los Pagos Recurrentes han Expirado. Este es el último Pago.';
$_['text_cron_summary_token_heading']   = 'Actualizar el Token de Acceso:';
$_['text_cron_summary_token_updated']   = 'Token de Acceso Actualizado Exitosamente.';
$_['text_cron_summary_error_heading']   = 'Errores de la Transacción:';
$_['text_cron_summary_fail_heading']    = 'Transacciones Fallidas (Perfiles Suspendidos):';
$_['text_cron_summary_success_heading'] = 'Transacciones Exitosas:';
$_['text_cron_fail_charge']             = 'Perfil <strong>#%s</strong> no pudo ser cargado con <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Perfil <strong>#%s</strong> fue cargado con <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Tarjeta de Crédito/Débito';
$_['text_token_issue_customer_error']   = 'se está experimentando una Interrupción Técnica en el sistema de pago. Intentar Nuevamente.';
$_['text_token_revoked_subject']        = 'El Token de Acceso Square ha sido revocado.';
$_['text_token_revoked_message']        = "El acceso de la extensión de pago de Square a la cuenta ha sido revocado a través del Panel. Se deben verificar las credenciales de la aplicación en la configuración de la extensión y conectarse nuevamente.";
$_['text_token_expired_subject']        = 'El Token de Acceso Square ha expirado';
$_['text_token_expired_message']        = "El token de acceso de la extensión de pago de Square que conecta a la cuenta de Square ha expirado. Se deben verificar las credenciales de la aplicación y el trabajo CRON en la configuración de la extensión y conectarse nuevamente.";

// Error
$_['error_browser_not_supported']       = 'Error: El Sistema de Pago no es Compatible con el Navegador Web. Actualizarlo o intentar con uno diferente.';
$_['error_card_invalid']                = 'Error: Tarjeta Inválida.';
$_['error_squareup_cron_token']         = 'Error: El Token de Acceso no pudo ser Refrescado. Conectarse con la Extensión Square desde el Panel de Administrador del Ssitema.';

// Error
$_['warning_test_mode']                 = 'Error: Modo Sandbox Habilitado. Las transacciones parecerán realizarse, pero no se realizarán cargos.';

// Statuses
$_['squareup_status_comment_authorized']    = 'La transacción con tarjeta ha sido autorizada pero aún no ha sido capturada.';
$_['squareup_status_comment_captured']      = 'La transacción con tarjeta fue autorizada y posteriormente capturada (ej., completada).';
$_['squareup_status_comment_voided']        = 'La transacción con tarjeta fue autorizada y posteriormente anulada (ij., cancelada).   ';
$_['squareup_status_comment_failed']        = 'Transacción con Tarjeta Fallida.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Dirección del País de Pago Inválida. Modificar e Intentar nuevamente.';
$_['squareup_override_error_shipping_address.country']      = 'Dirección del País de Envío Inválida. Modificar e Intentar nuevamente.';
$_['squareup_override_error_email_address']                 = 'Email de Cliente Inválido. Modificar e Intentar nuevamente.';
$_['squareup_override_error_phone_number']                  = 'Número de Teléfono Inválido. Modificar e Intentar nuevamente.';
$_['squareup_error_field']                                  = ' Campo: %s';