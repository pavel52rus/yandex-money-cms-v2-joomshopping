<?php

/**
 * @package JoomShopping for Joomla!
 * @subpackage payment
 * @author YandexMoney
 * @copyright Copyright (C) 2012-2017 YandexMoney. All rights reserved.
 */

defined('_JEXEC') or die();

define('_JSHOP_YM_LICENSE_TEXT',"To start operating the module, connect your store to <a target=\"_blank\" href=\"https://checkout.yandex.com/\">Yandex.Checkout</a>.");
define('_JSHOP_YM_VERSION_DESCRIPTION','Module version ');

define('_JSHOP_YM_TAB_MONEY', 'Yandex.Money');
define('_JSHOP_YM_TAB_KASSA', 'Yandex.Checkout');
define('_JSHOP_YM_TAB_PAYMENTS', 'Billing');

define('_JSHOP_YM_KASSA_ON', 'Enable payment acceptance via Yandex.Checkout');
define('_JSHOP_YM_KASSA_HELP_CHECKURL', 'Only required if Yandex.Checkout\'s specialists ask for it');

define('_JSHOP_YM_KASSA_HEAD_LK', 'Parameters from Yandex.Checkout\'s Merchant Profile');
define('_JSHOP_YM_KASSA_SHOP_ID_LABEL', 'shopId');
define('_JSHOP_YM_KASSA_SHOP_ID_DESCRIPTION', 'Copy your shopId from your Yandex.Checkout\'s Merchant Profile');
define('_JSHOP_YM_KASSA_PASSWORD_LABEL', 'Secret key');
define('_JSHOP_YM_KASSA_PASSWORD_DESCRIPTION', 'Issue and activate a secret key under your Yandex.Checkout\'s Merchant Profile. Then copy it here.');

define('_JSHOP_YM_KASSA_PAYMODE_HEAD', 'Check the preferable scenario of selecting the payment method');
define('_JSHOP_YM_KASSA_PAYMODE_LABEL', 'Select payment method');
define('_JSHOP_YM_KASSA_SEND_RECEIPT_LABEL', 'Transmit details for receipts to Yandex.Checkout (Federal Law 54-FZ)');
define('_JSHOP_YM_KASSA_SEND_SECOND_RECEIPT_LABEL', 'Второй чек:');
define('_JSHOP_YM_KASSA_SEND_SECOND_RECEIPT_STATUS_LABEL', 'Формировать второй чек при переходе заказа в статус');
define('_JSHOP_YM_KASSA_SEND_SECOND_RECEIPT_INFO', 'Два чека нужно формировать, если покупатель вносит предоплату и потом получает товар или услугу. Первый чек — когда деньги поступают вам на счёт, второй — при отгрузке товаров или выполнении услуг.');
define('_JSHOP_YM_KASSA_SEND_SECOND_RECEIPT_HELP_BLOCK', 'Если в заказе будут позиции с признаками «Полная предоплата» — второй чек отправится автоматически, когда заказ перейдёт в выбранный статус.');
define('_JSHOP_YM_KASSA_SEND_SECOND_RECEIPT_HISTORY', 'Отправлен второй чек. Сумма %s рублей.');
define('_JSHOP_YM_KASSA_PAYMODE_KASSA', 'On Yandex.Checkout\'s site');
define('_JSHOP_YM_KASSA_PAYMODE_SHOP', 'On the store\'s site');
define('_JSHOP_YM_KASSA_PAYMODE_LINK', '<a href=\'https://tech.yandex.ru/money/doc/payment-solution/payment-form/payment-form-docpage/\' target=\'_blank\'>More about payment scenarios</a>');
define('_JSHOP_YM_KASSA_SELECT_TEXT', 'Check payment methods from the contract');
define('_JSHOP_YM_KASSA_CREDENTIALS_ERROR', 'Such secret key does not exist. If you are sure you copied the key correctly, this means it does not work for some reason. Issue and activate the key again <a href="https://kassa.yandex.ru/my" target="_blank">under your Merchant Profile</a>');
define('_JSHOP_YM_KASSA_TEST_WARNING', 'You have enabled the test mode. Check the payment making process. <a href="https://yandex.ru/support/checkout/payments/api.html#api__04" target="_blank">Learn more</a>');
define('_JSHOP_YM_DESCRIPTION_TITLE', 'Transaction data');
define('_JSHOP_YM_DESCRIPTION_DEFAULT_PLACEHOLDER', 'Payment for order No. %order_id%');
define('_JSHOP_YM_ENABLE_HOLD_MODE', 'Enable payment holding');
define('_JSHOP_YM_ENABLE_HOLD_MODE_HELP', 'If the option is enabled, payments are processed in two steps: first, the required amount is blocked on the customer’s card, and then you need to manually capture it via the administrator’s dashboard. <a href="https://kassa.yandex.ru/features-pre-authorisation.html" target="_blank">Learn more at.</a>');
define('_JSHOP_YM_HOLD_MODE_STATUSES', 'What status should be assigned to an order if it is:');
define('_JSHOP_YM_HOLD_MODE_ON_HOLD_STATUS', 'waiting for capture');
define('_JSHOP_YM_HOLD_MODE_ON_HOLD_STATUS_HELP', 'the order status will be changed to this one after the funds are credited, until the store\'s operator either captures or cancels the payment');
define('_JSHOP_YM_HOLD_MODE_CANCEL_STATUS', 'canceled');
define('_JSHOP_YM_HOLD_MODE_CANCEL_STATUS_HELP', 'the order status will be changed to this one after the payment is canceled');
define('_JSHOP_YM_HOLD_MODE_COMMENT_ON_HOLD', 'New payment received. Capture until %1$s, after that date it will be automatically canceled');
define('_JSHOP_YM_HOLD_MODE_CAPTURE_PAYMENT_SUCCESS', 'You\'ve captured a payment in Yandex.Checkout. ');
define('_JSHOP_YM_HOLD_MODE_CAPTURE_PAYMENT_FAIL', 'Payment wasn\'t captured. Please try again.');
define('_JSHOP_YM_HOLD_MODE_CANCEL_PAYMENT_SUCCESS', 'You\'ve canceled a payment in Yandex.Checkout.  Money will be returned to the user.');
define('_JSHOP_YM_HOLD_MODE_CANCEL_PAYMENT_FAIL', 'Payment wasn\'t canceled. Please try again.');
define('_JSHOP_YM_DESCRIPTION_HELP', 'Full description of the transaction that the user will see during the checkout process. You can find it in your Yandex.Checkout Merchant Profile. For example, "Payment for order No. 72 by user@yandex.ru". Limitations: no more than 128 symbols.');
define('_JSHOP_YM_METHOD_YANDEX_MONEY_DESCRIPTION', 'Yandex.Money');
define('_JSHOP_YM_METHOD_CARDS_DESCRIPTION', 'Bank cards');
define('_JSHOP_YM_METHOD_BANK_CARD_DESCRIPTION', 'Bank cards');
define('_JSHOP_YM_METHOD_CASH_DESCRIPTION', 'Cash via payment kiosks');
define('_JSHOP_YM_METHOD_MOBILE_BALANCE_DESCRIPTION', 'Direct carrier billing');
define('_JSHOP_YM_METHOD_WEBMONEY_DESCRIPTION', 'Webmoney');
define('_JSHOP_YM_METHOD_ALFABANK_DESCRIPTION', 'Alfa-Click');
define('_JSHOP_YM_METHOD_SBERBANK_DESCRIPTION', 'Sberbank Online');
define('_JSHOP_YM_METHOD_MA_DESCRIPTION', 'MasterPass');
define('_JSHOP_YM_METHOD_PB_DESCRIPTION', 'Promsvyazbank');
define('_JSHOP_YM_METHOD_QIWI_DESCRIPTION', 'QIWI Wallet');
define('_JSHOP_YM_METHOD_TINKOFF_BANK_DESCRIPTION', 'Tinkoff online banking');
define('_JSHOP_YM_METHOD_MP_DESCRIPTION', 'Mobile payment kiosk');
define('_JSHOP_YM_METHOD_WIDGET_DESCRIPTION', 'Payment widget from Yandex.Checkout (cards, Apple Pay and Google Play)');
define('_JSHOP_YM_METHOD_INSTALLMENTS_DESCRIPTION', 'Installments');

define('_JSHOP_YM_METHOD_YANDEX_MONEY_DESCRIPTION_PUBLIC', 'Yandex.Money');
define('_JSHOP_YM_METHOD_CARDS_DESCRIPTION_PUBLIC', 'Bank cards');
define('_JSHOP_YM_METHOD_BANK_CARD_DESCRIPTION_PUBLIC', 'Bank cards');
define('_JSHOP_YM_METHOD_CASH_DESCRIPTION_PUBLIC', 'Cash via payment kiosks');
define('_JSHOP_YM_METHOD_MOBILE_BALANCE_DESCRIPTION_PUBLIC', 'Direct carrier billing');
define('_JSHOP_YM_METHOD_WEBMONEY_DESCRIPTION_PUBLIC', 'Webmoney');
define('_JSHOP_YM_METHOD_ALFABANK_DESCRIPTION_PUBLIC', 'Alfa-Click');
define('_JSHOP_YM_METHOD_SBERBANK_DESCRIPTION_PUBLIC', 'Sberbank Online');
define('_JSHOP_YM_METHOD_MA_DESCRIPTION_PUBLIC', 'MasterPass');
define('_JSHOP_YM_METHOD_PB_DESCRIPTION_PUBLIC', 'Promsvyazbank');
define('_JSHOP_YM_METHOD_QIWI_DESCRIPTION_PUBLIC', 'QIWI Wallet');
define('_JSHOP_YM_METHOD_TINKOFF_BANK_DESCRIPTION_PUBLIC', 'Tinkoff online banking');
define('_JSHOP_YM_METHOD_MP_DESCRIPTION_PUBLIC', 'Mobile payment kiosk');
define('_JSHOP_YM_METHOD_WIDGET_DESCRIPTION_PUBLIC', 'Bank cards, Apple Pay, Google Play');
define('_JSHOP_YM_METHOD_INSTALLMENTS_DESCRIPTION_PUBLIC', 'Installments');

define('_JSHOP_YM_METHOD_INSTALLMENTS_AMOUNT', ' (%s ₽ per month)');

define('_JSHOP_YM_KASSA_MPOS_LABEL', 'Success page for the Payment by Card on Delivery method');
define('_JSHOP_YM_KASSA_MPOS_HELP', 'This page contains delivery information. Specify the terms of the delivery and the payment here');


define('_JSHOP_YM_MONEY_HEAD', 'To start operating the module, connect your store to <a target="_blank" href="https://money.yandex.ru/">Yandex.Money</a>.');
define('_JSHOP_YM_MONEY_ON', 'Enable payment acceptance to the Yandex.Money Wallet');
define('_JSHOP_YM_MONEY_REDIRECT_HELP', "Copy this link to the Redirect URL field at the <a href='https://money.yandex.ru/myservices/online.xml' target='_blank'>notifications settings page</a>.");

define('_JSHOP_YM_MONEY_SET_HEAD', 'Payment acceptance settings');
define('_JSHOP_YM_MONEY_WALLET', 'Wallet number');
define('_JSHOP_YM_MONEY_PSW', 'Codeword');

define('_JSHOP_YM_MONEY_SELECT_HEAD', 'Check the preferable scenario of selecting the payment method');
define('_JSHOP_YM_MONEY_SELECT_LABEL', 'Select payment method');
define('_JSHOP_YM_METHOD_YM2_DESCRIPTION_PUBLIC', 'Yandex.Money');
define('_JSHOP_YM_METHOD_CARDS2_DESCRIPTION_PUBLIC', 'Bank cards');

define('_JSHOP_YM_COMMON_HEAD', 'Additional settings for administrator');
define('_JSHOP_YM_COMMON_STATUS', 'Order status after the payment');

define('_JSHOP_YM_PAYMENTS_HEAD', 'This is a payment form for your website. It allows accepting payments to the company\'s account from
cards and Yandex.Money wallets, without a contract.<br />
Setting up requires the form\'s ID: it will be indicated in the email once you
<a href="https://money.yandex.ru/fastpay/" target="_blank">build the form in the constructor</a>.');

define('_JSHOP_YM_PAYMENTS_ON', 'Activate payments via Billing');
define('_JSHOP_YM_PAYMENTS_ID_LABEL', 'Form ID');
define('_JSHOP_YM_PAYMENTS_DESCRIPTION_LABEL', 'Payment purpose');
define('_JSHOP_YM_PAYMENTS_DESCRIPTION_PLACEHOLDER', 'Order No. %order_id% Payment via Billing');
define('_JSHOP_YM_PAYMENTS_DESCRIPTION_INFO', 'Payment purpose is added to the payment order: specify whatever will help identify the order paid via Billing');
define('_JSHOP_YM_PAYMENTS_STATUS_LABEL', 'Order status');
define('_JSHOP_YM_PAYMENTS_STATUS_INFO', 'The status should indicate that the result of the payment is unknown: you can only find out if the customer paid or not by checking the notification sent to your email or by contacting your bank.');
define('_JSHOP_YM_PAYMENTS_FIO_LABEL', 'Payer\'s full name');
define('_JSHOP_YM_PAYMENTS_CONFIRM_LABEL', 'Next');
define('_JSHOP_YM_PAYMENTS_EMPTY_NAME_ERROR', 'Payer\'s full name is empty');
define('_JSHOP_YM_PAYMENTS_INVALID_NAME_ERROR', 'The payer\'s name should consist of the first, middle, and last name, separated by spaces');

// версия 2.х
define('_JSHOP_YM_LICENSE','License agreement:');
define('_JSHOP_YM_LICENSE_TEXT2',"<p>By using this program in any way, you fully and unconditionally accept the terms of the license agreement as posted at <a href=\"https://money.yandex.ru/doc.xml?id=527132\"> https://money.yandex.ru/doc.xml?id=527132 </a>(hereinafter referred to \"license agreement\"). If you do not accept any part of the terms of the license agreement, you are forbidden to use the program for any purpose.</p>");
define('_JSHOP_YM_TESTMODE_DESCRIPTION', 'Enable test mode');
define('_JSHOP_YM_MODE_DESCRIPTION', 'Payment acceptance settings');
define('_JSHOP_YM_MODE1_DESCRIPTION', 'Yandex.Money');
define('_JSHOP_YM_MODE2_DESCRIPTION', 'Yandex.Checkout (On the store\'s site)');
define('_JSHOP_YM_MODE3_DESCRIPTION', 'Yandex.Checkout (On Yandex.Checkout\'s site)');
define('_JSHOP_YM_MODE4_DESCRIPTION', 'Billing (bank cards, e-money)');
define('_JSHOP_YM_REG_IND', 'If you don\'t have a Yandex.Money account, register here - <a href="https://money.yandex.ru/" target="_blank">https://money.yandex.ru/</a><br/><b>IMPORTANT!</b> Copy this link to the Redirect URL field at the <a href=\'https://money.yandex.ru/myservices/online.xml\' target=\'_blank\'>notifications settings page</a>.');

define('_JSHOP_YM_REG_ORG', "To start operating the module, connect your store to <a target=\"_blank\" href=\"https://checkout.yandex.com/\">Yandex.Checkout</a>. Shop ID, scid, ShopPassword can be found in the <a href='https://kassa.yandex.ru/my' target='_blank'>Merchant Profile</a> after the onboarding process.");
define('_JSHOP_YM_METHODS_DESCRIPTION', 'Select payment method');
define('_JSHOP_YM_PASSWORD', 'Specify shopPassword:');
define('_JSHOP_YM_SHOPID', 'Specify shopId:');
define('_JSHOP_YM_SCID', 'Specify scid:');
define('_JSHOP_YM_PARAM', 'Parameter name');
define('_JSHOP_YM_VALUE', 'Value');
define('_JSHOP_YM_RETURNURL', 'Dynamic');
define('_JSHOP_YM_ACCOUNT_DESCRIPTION', 'Wallet number:');

define('_JSHOP_YM_PAY', 'Pay!');
define('_JSHOP_YM_TRANSACTION_END', 'Order status after the payment');
define('_JSHOP_YM_TEXT_MPOS', 'Success page for the Payment by Card on Delivery method');

//updater
define('_JSHOP_YM_UPDATER_ERROR_RESTORE', 'Unable to restore the data from the backup. ');
define('_JSHOP_YM_UPDATER_SUCCESS_MESSAGE', 'Module successfully installed ');
define('_JSHOP_YM_UPDATER_ERROR_REMOVE', 'Unable to delete backup %s.');
define('_JSHOP_YM_ERROR_BACKUP_NOT_FOUND', 'Unable to delete backup %s.');
define('_JSHOP_YM_ERROR_REMOVE_BACKUP', 'Unable to delete backup %s.');
define('_JSHOP_YM_SUCCESS_REMOVE_BECKUP', 'Backup %s successfully deleted');
define('_JSHOP_YM_SUCCESS_UPDATE_VERSION', 'Module version %s successfully downloaded and installed');
define('_JSHOP_YM_ERROR_UNPACK_NEW_VERSION', 'Unable to extract archive %s. More about the error in <a href="%s">module\'s logs</a>');
define('_JSHOP_YM_ERROR_CREATE_BACKUP', 'Unable to create a backup copy of the installed module version. More about the error in <a href="%s">module\'s logs</a>');
define('_JSHOP_YM_ERROR_DOWNLOAD_NEW_VERSION', 'Unable to load the archive, please try again. More about the error in <a href="%s">module\'s logs</a>');
define('_JSHOP_YM_FAILED_CREATE_DIRECTORY', 'Unable to create directory ');
define('_JSHOP_YM_FAILED_DOWNLOAD_UPDATE', 'Unable to load the archive with the update');
define('_JSHOP_YM_UPDATER_HEADER_TEXT', ' New module versions with added features and fixed errors will appear here. Click the Update button to install the latest module version.');
define('_JSHOP_YM_UPDATER_ABOUT', 'About the module:');
define('_JSHOP_YM_UPDATER_CURRENT_VERSION', 'Current module version —');
define('_JSHOP_YM_UPDATER_LAST_VERSION', 'Latest available module version —');
define('_JSHOP_YM_UPDATER_LAST_CHECK', 'Date of the last check for updates —');
define('_JSHOP_YM_UPDATER_CHECK', 'Check for updates');
define('_JSHOP_YM_HISTORY_LABEL', 'Changelog:');
define('_JSHOP_YM_UPDATE_LABEL', 'Update module');
define('_JSHOP_YM_INSTALL_MESSAGE', 'You have the latest module version installed.');
define('_JSHOP_YM_BACKUPS_LABEL', 'Backups');
define('_JSHOP_YM_MODULE_VERSION_LABEL', 'Module version');
define('_JSHOP_YM_BACKUP_DATE_CREATE', 'Creation date');
define('_JSHOP_YM_BACKUP_FILE_NAME', 'File name');
define('_JSHOP_YM_BACKUP_FILE_SIZE', 'File size');
define('_JSHOP_YM_UPDATER_RESTORE', 'Restore');
define('_JSHOP_YM_UPDATER_DELETE', 'Remove');
define('_JSHOP_YM_UPDATER_APPROVE_ACTION_MESSAGE', 'Do you really want to update module?');
define('_JSHOP_YM_UPDATER_APPROVE_DELETE_MESSAGE', 'Do you really want to delete the backup copy of this module version ');
define('_JSHOP_YM_UPDATER_APPROVE_RESTORE_MESSAGE', 'Do you really want to restore the module from the backup copy of this version');
define('_JSHOP_YM_UPDATER_TEXT_HEADER', 'Module updates');
define('_JSHOP_YM_UPDATER_ABOUT_TEXT', 'New module versions with added features and fixed errors will appear here. Click the Update button to install the latest module version.');
define('_JSHOP_YM_UPDATER_DISABLED_TEXT', 'Unfortunately, the module update option is unavailable');
define('_JSHOP_YM_UPDATER_CAUSE_ZIP_CURL', 'because the <strong>"zip"</strong> and <strong>"curl"</strong> extensions are not installed.');
define('_JSHOP_YM_UPDATER_CAUSE_ZIP', 'because the <strong>"zip"</strong> extension is not installed.');
define('_JSHOP_YM_UPDATER_CAUSE_CURL', 'because the <strong>"curl"</strong> extension is not installed.');



define('_JSHOP_YM_WAITING_FOR_CAPTURE', 'Waiting for capture');
define('_JSHOP_YM_CAPTURE_FAILED', 'Capture failed');
define('_JSHOP_YM_PAYMENT_CAPTURED', 'Payment captured');
define('_JSHOP_YM_PAYMENT_CAPTURED_TEXT', 'Payment %s captured');
define('_JSHOP_YM_ERROR_MESSAGE_CREATE_PAYMENT', 'Unable to create the payment, choose another payment method.');
define('_JSHOP_YM_ALFA_CLICK_TEXT', 'Specify the login, and we\'ll send the bill in Alfa-Click. All you have do after that is confirm the payment online at the bank\'s website.');
define('_JSHOP_YM_QIWI_PHONE_TEXT', 'Phone number linked to QIWI Wallet');
define('_JSHOP_YM_FILL_PHONE_MESSAGE', 'Specify phone number');
define('_JSHOP_YM_FILL_ALFA_CLICK_LOGIN', 'Specify the login for Alfa-Click');
define('_JSHOP_YM_ENABLE', 'Enable');
define('_JSHOP_YM_DISABLE', 'Disable');
define('_JSHOP_YM_DEFAULT_TAX_LABEL', 'Default rate');
define('_JSHOP_YM_DEFAULT_TAX_DESCRIPTION', 'The default rate applies if another rate is not set on the product\'s page.');
define('_JSHOP_YM_TAX_RATES_LABEL', 'Compare rates');
define('_JSHOP_YM_TAX_IN_MODULE', 'Rate at your store');
define('_JSHOP_YM_TAX_FOR_CHECKOUT', 'Rate for the receipt to the tax service');
define('_JSHOP_YM_WITHOUT_VAT', 'Without VAT');
define('_JSHOP_YM_VAT_0', '0%');
define('_JSHOP_YM_VAT_10', '10%');
define('_JSHOP_YM_VAT_18', '18%');
define('_JSHOP_YM_VAT_20', '20%');
define('_JSHOP_YM_VAT_10_100', 'Applicable rate 10/110');
define('_JSHOP_YM_VAT_18_118', 'Applicable rate 18/118');
define('_JSHOP_YM_VAT_20_120', 'Applicable rate 20/120');
define('_JSHOP_YM_NOTIFICATION_URL_LABEL', 'Address for notifications');
define('_JSHOP_YM_NOTIFICATION_URL_HELP_TEXT', 'Only required if Yandex.Checkout\'s specialists ask for it');
define('_JSHOP_YM_LOG_VIEW_LABEL', 'View logs');
define('_JSHOP_YM_CLEAR_LOGS', 'Clear logs');
define('_JSHOP_YM_CLOSE', 'Close');
define('_JSHOP_YM_LOGS_LABEL', 'Logs');

define('_JSHOP_YM_TAB_UPDATE', 'Module update');

define('_JSHOP_YM_BTN_BACK', 'Back');

