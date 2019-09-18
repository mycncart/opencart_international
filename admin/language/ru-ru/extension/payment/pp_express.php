<?php
// Heading
$_['heading_title']					 = 'PayPal Экспресс-платежи';

// Text
$_['text_extension']				 = 'Расширения';
$_['text_success']				 	 = 'Настройки успешно изменены!';
$_['text_edit']                      = 'Редактирование';
$_['text_pp_express']				 = '<a href="https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW" taget="_blank"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			 = 'Авторизация';
$_['text_sale']						 = 'Продажа';
$_['text_signup']                    = 'Зарегистрируйтесь в PayPal - сначала сохраните настройки перед обновлением';
$_['text_sandbox']                   = 'Зарегистрируйтесь PayPal Sandbox - сначала сохраните настройки перед обновлением';
$_['text_configure_live']            = 'Configure Live';
$_['text_configure_sandbox']         = 'Configure Sandbox';
$_['text_show_advanced']             = 'Show Advanced';
$_['text_show_quick_setup']          = 'Show Quick Setup';
$_['text_quick_setup']             	 = 'Quick setup - Link an existing or create a new PayPal account to start accepting payments in minutes';
$_['text_paypal_consent']		 	 = 'By using the quick setup tool you allow PayPal to receive information about your store';
$_['text_success_connect']			 = 'Success: You have connected your PayPal account!';
$_['text_preferred_main']		 	 = 'Gives your buyers a simplified checkout experience on multiple devices that keeps them local to your website throughout the payment authorization process';
$_['text_learn_more']			 	 = '(Learn more)';
$_['text_preferred_li_1']			 = 'Start accepting PayPal in three clicks';
$_['text_preferred_li_2']			 = 'Accept payments from around the world';
$_['text_preferred_li_3']			 = 'Offer Express Checkout Shortcut, letting buyers checkout directly from your basket page';
$_['text_preferred_li_4']			 = 'Improve conversion with PayPal One Touch and In-Context checkout';
$_['text_connect_paypal']			 = 'Connect with PayPal';
$_['text_incontext_not_supported']	 = '* Not supported with In-Context Checkout';
$_['text_retrieve']	 				 = 'Your details have been entered from PayPal';
$_['text_enable_button']			 = 'We recommend offering PayPal Express Shortcut to maximise checkout conversion, this allows customers to use their PayPal address book and <strong>checkout is as little as three taps</strong> from the basket page. Click enable to install the extension and access the layout manager, you will ned to add "PayPal Express Checkout Button" to the checkout layout';

// Entry
$_['entry_username']				 = 'API Username';
$_['entry_password']				 = 'API Password';
$_['entry_signature']				 = 'API Signature';
$_['entry_sandbox_username']		 = 'API Sandbox Username';
$_['entry_sandbox_password']		 = 'API Sandbox Password';
$_['entry_sandbox_signature']		 = 'API Sandbox Signature';
$_['entry_ipn']						 = 'IPN URL';
$_['entry_test']					 = 'Тестовый режим (Sandbox)';
$_['entry_debug']					 = 'Запись ошибок';
$_['entry_currency']				 = 'Валюта по умолчанию';
$_['entry_recurring_cancel']	     = 'Разрешить клиентам отменять периодические платежи';
$_['entry_transaction']		         = 'Метод транзакции';
$_['entry_total']					 = 'Минимальная сумма заказа';
$_['entry_geo_zone']				 = 'Географическая зона';
$_['entry_status']					 = 'Статус';
$_['entry_sort_order']				 = 'Порядок сортировки';
$_['entry_canceled_reversal_status'] = 'Статус заказа, если платеж отменен';
$_['entry_completed_status']		 = 'Статус заказа после оплаты';
$_['entry_denied_status']			 = 'Статус заказа при отказе платежа';
$_['entry_expired_status']			 = 'Статус заказа при просрочки платежа';
$_['entry_failed_status']			 = 'Статус ошибки при платеже';
$_['entry_pending_status']			 = 'Статус заказа в ожидании платежа';
$_['entry_processed_status']		 = 'Статус заказа в процессе платежа';
$_['entry_refunded_status']			 = 'Статус заказа при возврате платежа';
$_['entry_reversed_status']			 = 'Статус заказа при сторнировании средств';
$_['entry_voided_status']			 = 'Статус заказа при аннулировании платежа';
$_['entry_allow_notes']				 = 'Разрешить заметки';
$_['entry_colour']	      			 = 'Цвет фона';
$_['entry_logo']					 = 'Логотип';
$_['entry_incontext']				 = 'Disable In-Context Checkout';

// Tab
$_['tab_api']				         = 'API информация';
$_['tab_order_status']				 = 'Статус заказа';
$_['tab_checkout']					 = 'Оформление';

// Help
$_['help_ipn']						 = 'Требуется для подписки';
$_['help_total']					 = 'Минимальная сумма для включения метода оплаты';
$_['help_logo']						 = 'Максимум 750px(ш) x 90px(в)<br />Вы должны использовать логотип, если установили SSL';
$_['help_colour']					 = 'HTML цвет в формате HEX, например D6D7F5';
$_['help_currency']					 = 'Использовать при поиске транзакции';

// Error
$_['error_permission']				 = 'У Вас нет прав для управления данным модулем!';
$_['error_username']				 = 'Необходимо заполнить API Username!';
$_['error_password']				 = 'Необходимо заполнить API Password!';
$_['error_signature']				 = 'Необходимо заполнить API Signature!';
$_['error_sandbox_username']	 	 = 'API Sandbox Username Required!';
$_['error_sandbox_password']		 = 'API Sandbox Password Required!';
$_['error_sandbox_signature']		 = 'API Sandbox Signature Required!';
$_['error_api']						 = 'Paypal Authorization Error';
$_['error_api_sandbox']				 = 'Paypal Sandbox Authorization Error';
$_['error_consent']				 	 = 'To use quick setup you need to permit PayPal to use your store information';


