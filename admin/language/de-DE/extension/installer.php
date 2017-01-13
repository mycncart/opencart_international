<?php
/**
 * @version		$Id: installer.php 4564 2016-12-01 13:12:47Z mic $
 * @package		Language Translation German Backend
 * @author		mic - https://osworx.net
 * @copyright	2016 OSWorX - https://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'Erweiterungen Installieren';

// Text
$_['text_upload']			= 'Erweiterung hochladen &amp; installieren';
$_['text_success']			= 'Erweiterung wurde erfolgreich hochgeladen, um sie anzuwenden müssen jetzt die Anpassungen angewendet werden.<br />Dazu bitte im Menü links auf <b>Anpassungen</b> und dann auf <b>Aktualisieren</b> klicken';
$_['text_list']				= 'Übersicht';
$_['text_unzip']			= 'Entpacke Dateien';
$_['text_ftp']				= 'Kopiere Dateien';
$_['text_sql']				= 'Führe Installationsanweisungen für Datenbank aus';
$_['text_xml']				= 'Wende Anpassungen an';
$_['text_php']				= 'Führe weitere Installationsanweisungen (PHP) aus';
$_['text_remove']			= 'Entferne temporäre Dateien';
$_['text_clear']			= 'Temporäre Dateien erfolgreich entfernt';

// Entry
$_['entry_upload']			= 'Datei hochladen<br />Mehr dazu <a href="https://github.com/opencart/opencart/wiki/Modification-System" target="_blank">hier</a>';
$_['entry_overwrite']		= 'Dateien welche überschrieben oder hinzugefügt werden';
$_['entry_progress']		= 'Status';

// Help
$_['help_upload']			= 'Benötigt entweder eine <b>.zip oder .xml</b> Datei, die Endung muss lauten <b>.ocmod.zip</b> oder <b>.ocmod.xml</b><br />War das Hochladen erfolgreich, muß um die Anpassungen anzuwenden anschließend das Menü <i>Anpassungen</i> aufgerufen werden, dort den Button <i>Aktualisieren</i> anklicken';

// Error
$_['error_permission']		= 'Hinweis: keine Rechte zur Ausführung dieser Aktion';
$_['error_temporary']		= 'Achtung: es befinden sich einige temporäre Dateien im Verzeichnis, zum Löschen den Button <b>Bereinigen</b> anklicken';
$_['error_upload']			= 'Datei konnte nicht hochgeladen werden';
$_['error_filetype']		= 'Ungültige Dateiart, Dateiendung muss entweder auf <b>.ocmod.zip</b> oder <b>.ocmod.xml</b> lauten';
$_['error_file']			= 'Datei nicht gefunden';
$_['error_unzip']			= 'Gepackte Datei konnte nicht geöffnet werden';
$_['error_code']			= 'Anpassung erfordert eine eindeutige Identifikationsnummer';
$_['error_exists']			= 'Die Anpassung <b>%s</b> ist bereits in der Datenbank vorhanden.<br />Soll sie nochmals geladen werden (z.B. ein Update), dann bitte vorher über das Menü <b>Erweiterungen > Anpassungen</b> entfernen und anschließend hier löschen.';
$_['error_directory']		= 'Ordner <b>upload</b> mit Dateien zum hochladen konnte nicht gefunden werden';
$_['error_ftp_status']		= 'Hochladen nicht möglich, erforderliche FTP-Einstellungen müssen in der <b>Systemsteuerung > Reiter FTP</b> angegeben sein';
$_['error_ftp_connection']	= 'FTP-Verbindung zu <b>%s:%s</b> nicht möglich';
$_['error_ftp_login']		= 'FTP-Anmeldung als <b>%s</b> nicht möglich';
$_['error_ftp_root']		= 'Hauptverzeichnis <b>%s</b> konnte nicht bestimmt werden';
$_['error_ftp_directory']	= 'Verzeichniswechsel nach <b>%s</b> nicht möglich';
$_['error_ftp_file']		= 'Datei <b>%s</b> konnte nicht hochgeladen werden';