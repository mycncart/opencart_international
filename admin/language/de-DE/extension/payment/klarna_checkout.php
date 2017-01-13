<?php
/**
 * @version		$Id: klarna_checkout.php 4457 2016-10-05 10:04:36Z mic $
 * @package		Language Translation German Backend
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 *
 */

// Heading
$_['heading_title']						= 'Bezahlen mit Klarna';

// Text
$_['text_extension']					= 'Erweiterungen';
$_['text_success']						= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']							= 'Bearbeiten';
$_['text_live']							= 'Live';
$_['text_test']							= 'Test';
$_['text_payment_info']					= 'Zahlungsinfo';
$_['text_na']							= 'k.A.';
$_['text_confirm_cancel']				= 'Sicher diese Transaltion abbrechen?';
$_['text_confirm_capture']				= 'Sicher übernehmen?';
$_['text_confirm_refund']				= 'Sicher zurück zahlen?';
$_['text_confirm_extend_authorization']	= 'Sicher die Genehmigung erweitern?';
$_['text_confirm_release_authorization']= 'Sicher die ausstehende Genehmigung freigeben?';
$_['text_confirm_merchant_reference']	= 'Sicher die Händlerreferenz aktualisieren?';
$_['text_confirm_shipping_info']		= 'Sicher die Versandinfo speichern?';
$_['text_confirm_billing_address']		= 'Sicher die Rechnungsadresse aktualisieren?';
$_['text_confirm_shipping_address']		= 'Sicher die Versandadresse erweitern?';
$_['text_confirm_trigger_send_out']		= 'Sicher neue Aussendung veranlassen?';
$_['text_confirm_settlement']			= 'Sicher Abrechnungsdateien bestätigen?';
$_['text_no_capture']					= 'Keine Übernahmen';
$_['text_no_refund']					= 'Keine Rückzahlungen';
$_['text_success_action']				= 'Erfolgreich';
$_['text_error_generic']				= 'Anfrage nicht erfolgreich';
$_['text_capture_shipping_info_title']	= 'Übernehme %d - Versandinfo';
$_['text_capture_billing_address_title']= 'Übernehme %d - Rechnungsadresse';
$_['text_new_capture_title']			= 'Neue Übernahme';
$_['text_new_refund_title']				= 'Neue Rückzahlung';
$_['text_downloading_settlement']		= 'Lade Abrechnungsdateien ..';
$_['text_processing_orders']			= 'Verarbeite Aufträge ..';
$_['text_processing_order']				= 'Verarbeite Auftrag';
$_['text_no_files']						= 'Keine Dateien zum Download';
	// old
$_['text_payment']                  	= 'Zahlung';

// Column
$_['column_order_id']					= 'Auftragsnr.';
$_['column_capture_id']					= 'Übernahmenr.';
$_['column_reference']					= 'Klarna Referenz';
$_['column_status']						= 'Status';
$_['column_merchant_reference_1']		= 'Händlerreferenz';
$_['column_customer_details']			= 'Kundendetails';
$_['column_billing_address']			= 'Rechnungsdetails';
$_['column_shipping_address']			= 'Versanddetails';
$_['column_order_lines']				= 'Auftragsdetails';
$_['column_amount']						= 'Betrag';
$_['column_authorization_remaining']	= 'Genehmigung ausstehend';
$_['column_authorization_expiry']		= 'Ablauf Genehmigung';
$_['column_item_reference']				= 'Referenz';
$_['column_type']						= 'Art';
$_['column_quantity']					= 'Anzahl';
$_['column_quantity_unit']				= 'Einheit';
$_['column_name']						= 'Name';
$_['column_total_amount']				= 'Gesamtbetrag';
$_['column_unit_price']					= 'Einzelpreis';
$_['column_total_discount_amount']		= 'Gesamt Rabatt';
$_['column_tax_rate']					= 'Steuersatz';
$_['column_total_tax_amount']			= 'Gesamt Steuern';
$_['column_action']						= 'Aktion';
$_['column_cancel']						= 'Abbrechen';
$_['column_capture']					= 'Übernahmen';
$_['column_refund']						= 'Rückzahlungen';
$_['column_date']						= 'Datum';
$_['column_title']						= 'Titel';
$_['column_given_name']					= 'Name';
$_['column_family_name']				= 'Familienname';
$_['column_street_address']				= 'Adresse 1';
$_['column_street_address2']			= 'Adresse 2';
$_['column_city']						= 'Satdt';
$_['column_postal_code']				= 'PLZ';
$_['column_region']						= 'Region';
$_['column_country']					= 'Land';
$_['column_email']						= 'Email';
$_['column_phone']						= 'Tel.';
$_['column_action']						= 'Aktion';
$_['column_shipping_info']				= 'Versandinfo';
$_['column_shipping_company']			= 'Versandfirma';
$_['column_shipping_method']			= 'Versandart';
$_['column_tracking_number']			= 'Nachverf.Nr.';
$_['column_tracking_uri']				= 'Nachverf. URI';
$_['column_return_shipping_company']	= 'Retoure Versandfirma';
$_['column_return_tracking_number']		= 'Retourennr.';
$_['column_return_tracking_uri']		= 'Retoure Nachverf. URI';

// Entry
$_['entry_debug']						= 'Berichte';
$_['entry_total']						= 'Gesamt';
$_['entry_order_status']				= 'Auftragsstatus';
$_['entry_status']						= 'Status';
$_['entry_terms']						= 'Bedingungen';
$_['entry_locale']						= 'Lokales';
$_['entry_currency']					= 'Währung';
$_['entry_merchant_id']					= 'Händlernr. (MID)';
$_['entry_secret']						= 'Öffentl. Geheimbegriff';
$_['entry_environment']					= 'Umgebung (Live/Test)';
$_['entry_country']						= 'Land';
$_['entry_api']							= 'API';
$_['entry_shipping_company']			= 'Versandfirma';
$_['entry_shipping_method']				= 'Versandart';
$_['entry_tracking_number']				= 'Nachverf.Nr.';
$_['entry_tracking_uri']				= 'Nachverf. URI';
$_['entry_return_shipping_company']		= 'Retoure Versandfirma';
$_['entry_return_tracking_number']		= 'Retoure Nachverf.Nr.';
$_['entry_return_tracking_uri']			= 'Retoure Nachverf. URI';
$_['entry_sftp_username']				= 'SFTP Benutzername';
$_['entry_sftp_password']				= 'SFTP Passwort';
$_['entry_process_settlement']			= 'Verarbeite Abrechnungsdateien';
$_['entry_settlement_order_status']		= 'Auftragsstatus';

// Help
$_['help_debug']						= 'Aktive Berichte können auch sensoble Daten speichern! Daehr nur einschalten wenn unbedingt benötigt.';
$_['help_total']						= 'Mindestgesamtsumme Warenkorb damit diese Zahlungsart aktiv wird';
$_['help_locale']						= 'Lokaler Sprachencode für jedes Konto. 2-Zeichen Sprachencode plus 2-Zeichen Ländercode (z.B. de-de für Deutsch, en-gb für Englisch, usw.)';
$_['help_api']							= 'Für europäische Kunden bietet Klarna keine Regionen an - d.h. dass Regionsspezifische Versandarten nicht funktionieren';
$_['help_sftp_username']				= 'SFTP Benutzername';
$_['help_sftp_password']				= 'SFTP Passwort';
$_['help_settlement_order_status']		= 'Auftragsstatus nach erfolgter Abrechnung';

// Button
$_['button_account_remove']				= 'Entferne Konto';
$_['button_account_add']				= 'Neues Konto';
$_['button_capture']					= 'Übernehmen';
$_['button_refund']						= 'Rückzahlung';
$_['button_extend_authorization']		= 'Erweitern';
$_['button_release_authorization']		= 'Freigeben';
$_['button_update']						= 'Aktualisieren';
$_['button_add_shipping_info']			= '+ Versandinfo';
$_['button_trigger_send_out']			= 'Neue Aussendung';
$_['button_edit_shipping_info']			= 'Bearbeite Versandinfo';
$_['button_edit_billing_address']		= 'Bearbeite Rechnungsadresse';
$_['button_new_capture']				= '+ Übernahme';
$_['button_new_refund']					= '+ Rückzahlung';
$_['button_process_settlement']			= 'Verarbeite Abrechnungsdateien';

// Error
$_['error_warning']						= 'Es fehlen noch benötigte Daten';
$_['error_php_version']					= 'Erforderliche Mindestversion von php: 5.4.0';
$_['error_ssl']							= '"Verwende SSL" muss in der Shopeinstellung aktiviert sein, ebenso das SSL-Zertifikat installiert';
$_['error_account_minimum']				= 'Mindestens ein Konto muss vorhanden sein';
$_['error_locale']						= 'Der lokale Sprachencode muss gültig sein';
$_['error_account_countries']			= 'Konto weist ein oder mehrere gleiche Länder auf';
$_['error_merchant_id']					= 'Händlernr. erforderlich';
$_['error_secret']						= 'Öffentl. Geheimbegriff erforderlich';

// Tab
$_['tab_setting']						= 'Einstellungen';
$_['tab_account']						= 'Konten';
$_['tab_settlement']					= 'Abrechnungen';