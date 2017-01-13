<?php
/**
 * @version		$Id: openbay.php 4455 2016-10-04 09:51:37Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']						= 'OpenBay Pro';

// Buttons
$_['button_retry']						= 'Wiederholen';
$_['button_faq_clear']					= 'Löschen';
$_['button_update']						= 'Update';
$_['button_patch']						= 'Patch';
$_['button_ftp_test']					= 'Verbindungstest';
$_['button_faq']						= 'FAQ Ansehen';

// Tab
$_['tab_setting']						= 'Einstellungen';
$_['tab_update']						= 'Updates';
$_['tab_update_v1']						= 'Einfacher Updater';
$_['tab_update_v2']						= 'Kompatibler Updater';
$_['tab_patch']							= 'Patch';
$_['tab_developer']						= 'Entwickler';

// Text
$_['text_dashboard']					= 'Übersicht';
$_['text_success']						= 'Einstellungen erfolgriech gespeichert';
$_['text_products']						= 'Artikel';
$_['text_orders']						= 'Aufträge';
$_['text_manage']						= 'Bearbeiten';
$_['text_help']							= 'Hilfe';
$_['text_tutorials']					= 'Anleitungen';
$_['text_suggestions']					= 'Vorschläge';
$_['text_version_latest']				= 'Aktuellste Version ist in Verwendung';
$_['text_version_check']				= 'Überprüfe Version';
$_['text_version_installed']			= 'Installierte Version von OpenBay Pro: v';
$_['text_version_current']				= 'Installierte Version ist';
$_['text_version_available']			= 'die Neueste ist';
$_['text_language']						= 'API Antwortsprache';
$_['text_getting_messages']				= 'Hole OpenBay Pro Nachrichten';
$_['text_complete']						= 'Fertig';
$_['text_patch_complete']				= 'Patch wurde angewendet';
$_['text_connection_ok']				= 'Verbindung OK. Shopverzeichnisse gefunden';
$_['text_updated']						= 'Module wurden aktualisiert (v.%s)';
$_['text_update_description']			= 'Das Updatetool wird Änderungen an diversen Dateien durchführen. Zuvor sollte eine Komplettsicherung durchgeführt werden!';
$_['text_patch_description']			= 'Wurde die Aktualisierung manuell durchgeführt, muss der Patch angewendet werden';
$_['text_clear_faq']					= 'Ausgeblendete FAQ-PopUs löschen';
$_['text_clear_faq_complete']			= 'Anmerkungen werden wieder angezeigt';
$_['text_install_success']				= 'Marktplart erfolgriech installiert';
$_['text_uninstall_success']			= 'Marktplatz  erfolgreich entfernt';
$_['text_title_messages']				= 'Nachrichten';
$_['text_marketplace_shipped']			= 'Auftragsstatus wird auf Marktplatz auf "versendet" aktualisiert';
$_['text_action_warning']				= 'Diese Aktion ist durch ein Passwort geschützt';
$_['text_check_new']					= 'Prüfe auf neuere Version';
$_['text_downloading']					= 'Lade Aktualisierungsdateien';
$_['text_extracting']					= 'Entpacke Dateien';
$_['text_running_patch']				= 'Wende Anpassungen an';
$_['text_fail_patch']					= 'Kann Dateien nicht entpacken';
$_['text_updated_ok']					= 'Update fertig, installierte Version ist ';
$_['text_check_server']					= 'Überprüfe Serveranforderungen';
$_['text_version_ok']					= 'Software ist am aktuellen Stand, installierte Version ist ';
$_['text_remove_files']					= 'Entfernen der Dateien nicht mehr notwendig';
$_['text_confirm_backup']				= 'Vor dem Fortfahren sicherstellen daß eine vollständige Sicherung gemacht wurde';
$_['text_test_connection']				= 'Teste FTP-Verbindung';
$_['text_run_update']					= 'Update durchführen';

// Column
$_['column_name']						= 'Pluginname';
$_['column_status']						= 'Status';
$_['column_action']						= 'Aktion';

// Entry
$_['entry_patch']            			= 'Patch manuell anwenden';
$_['entry_ftp_username']				= 'FTP Benutzername';
$_['entry_ftp_password']				= 'FTP Passwort';
$_['entry_ftp_server']					= 'FTP Serveradresse';
$_['entry_ftp_root']					= 'FTP Stammordner auf Server';
$_['entry_ftp_admin']					= 'Adminordner';
$_['entry_ftp_pasv']					= 'PASV Modus';
$_['entry_ftp_beta']					= 'Verwendet Betaversion';
$_['entry_courier']						= 'Dienst';
$_['entry_courier_other']				= 'Anderer Dienst';
$_['entry_tracking']					= 'Nachverfolgungsnr.';
$_['entry_empty_data']					= 'Storedaten löschen?';
$_['entry_password_prompt']				= 'Bitte das Passwort angeben';
$_['entry_update']						= 'Einfaches 1-Klick-Update';
$_['entry_beta']						= 'Betaversion anwenden';

// Error
$_['error_admin']						= 'Adminordner erforderlich';
$_['error_no_admin']					= 'verbindung OK, aber Adminordner nicht gefunden';
$_['error_no_files']					= 'Verbdindung OK, aber keine Shopordner gefunden. Ist der Stammordner richtig?';
$_['error_failed']						= 'Daten konnten nicht geladen werden, nochmal versuchen?';
$_['error_tracking_id_format']			= 'Nachverfolgungsnr. darf keine > oder < enthalten';
$_['error_tracking_courier']			= 'Für die Nachverfolgungsnr. muss ein Dienst ausgewählt werden';
$_['error_tracking_custom']				= 'Feld für Dienst leer lassen wenn ein eigener Dienst verwendet wird';
$_['error_permission']					= 'Keine Rechte für diese Aktion';
$_['error_mkdir']						= 'PHP Funktion <b>mkdir</b> nicht aktiviert, bitte Provider kontaktieren';
$_['error_file_delete']					= 'Dateien konnten nicht entfernt werden, bitte händisch löschen';
$_['error_mcrypt']						= 'PHP Funktion <b>mcrypt_encrypt</b> nicht aktiviert, bitte Provider kontaktieren';
$_['error_mbstring']					= 'PHP Bibliothek <b>mb strings</b> nicht aktiviert, bitte Provider kontaktieren';
$_['error_oc_version']					= 'Installierte Shopversion wurde nicht mit dieser Modulversion getestet - Fehlfunktionen könnten die Folge sein';
$_['error_fopen']						= 'PHP Funktion <b>fopen</b> ist nicht aktiviert - der Import von Bildern beim Produktimport ist daher nicht möglich';
$_['lang_error_vqmod']					= 'Der VQMod-Ordner enthält noch ältere Dateien, bitte zuerst entfernen';
	// old
$_['error_username']					= 'FTP Benutzername erforderlich';
$_['error_password']					= 'FTP Passwort erforderlich';
$_['error_server']						= 'FTP Server erforderlich';
$_['error_ftp_login']					= 'Kein Zugriff für diesen Benutzer';
$_['error_ftp_connect']					= 'Keine Verbindung zum Server möglich';
$_['error_ftpconnect']					= 'PHP FTP-Funktionen nicht aktiviert, bitte Provider kontaktieren';

// Help
$_['help_clear_faq']					= 'Zeige wieder alle Nachrichten';
$_['help_empty_data']					= 'Achtung: diese Aktion kann Schäden anrichten, nicht fortsetzen ohne genaueres Wissen darüber!';
$_['help_easy_update']					= 'Anklicken um die neueste Version von OpenBay Pro automatisch zu installieren';
$_['help_patch']						= 'Wird das Update über FTP gemacht, zum Fertigstellen den Patch anwenden';
$_['help_beta']							= 'Achtung! Die Betaversion arbeitet möglicherweise nicht korrekt!';
	// old
$_['help_ftp_beta']						= 'Achtung! Die Betaversion arbeitet möglicherweise nicht korrekt!';
$_['help_ftp_username']					= 'FTP Benutzername für die Verbindung';
$_['help_ftp_password']           		= 'FTP Passwort für die Verbindung';
$_['help_ftp_server']					= 'Entweder IP-Adresse oder Servername';
$_['help_ftp_root']						= 'Keinen abschließenden Slash (z.B. httpdocs/www)';
$_['help_ftp_admin']					= 'Wurder der Adminordner umbenannt,d ann hier neuen Namen angeben';
$_['help_ftp_pasv']						= 'Verwendet FTP-Verbindung im Passivmodus';
