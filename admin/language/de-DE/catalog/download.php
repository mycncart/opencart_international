<?php
/**
 * @version		$Id: download.php 3857 2015-03-02 20:53:49Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']		= 'Downloads';

// Text
$_['text_success']		= 'Download erfolgreich bearbeitet';
$_['text_list']			= 'Übersicht';
$_['text_add']			= 'Neu';
$_['text_edit']			= 'Bearbeiten';
$_['text_upload']		= 'Datei erfolgreich geladen';

// Column
$_['column_name']		= 'Bezeichnung';
$_['column_date_added']	= 'Erstellt';
$_['column_action']		= 'Aktion';

// Entry
$_['entry_name']		= 'Downloadname';
$_['entry_filename']	= 'Dateiname';
$_['entry_mask']		= 'Aliasname';

// Help
$_['help_filename']		= 'Datei kann entweder über den Downloadbutton geladen werden oder per FTP (in Ordner download). Wenn per FTP, dann Details unten angeben.<br /><br /><strong>Hinweis</strong>:<br />es wird empfohlen dass Dateiname und Aliasname verschieden sind. Damit kann eine Direktverlinkung verhindert werden.';
$_['help_mask']			= 'Es wird empfohlen unterschiedliche Datei- und Aliasnamen zu verwenden!<br />Damit kann verhindert werden dass Uploads von aussen direkt verlinkt werden';


// Error
$_['error_permission']	= 'Keine Rechte für diese Aktion';
$_['error_name']		= 'Name muss zwischen 3 und 64 Zeichen lang sein';
$_['error_upload']		= 'Upload erforderlich';
$_['error_filename']	= 'Der Dateiname muss zwischen 3 und 128 Zeichen umfassen';
$_['error_exists']		= 'Datei nicht vorhanden';
$_['error_mask']		= 'Aliasname muss zwischen 3 und 128 Zeichen lang sein';
$_['error_filetype']	= 'Ungültige Dateiart';
$_['error_product']		= 'Download ist mit %s Produkten verbunden und kann daher nicht gelöscht werden';