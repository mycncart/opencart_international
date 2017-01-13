<?php
/**
 * @version		$Id: customer_group.php 4343 2016-06-01 10:18:23Z mic $
 * @package		Language German - Backend
 * @author		mic - http://osworx.net
 * @copyright	2015 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']		= 'Kundengruppen';

// Text
$_['text_success']		= 'Datensatz erfolgreich bearbeitet';
$_['text_list']			= 'Übersicht';
$_['text_add']			= 'Neue Gruppe';
$_['text_edit']			= 'Bearbeiten';

// Column
$_['column_name']		= 'Name';
$_['column_sort_order']	= 'Reihenfolge';
$_['column_action']		= 'Aktion';

// Entry
$_['entry_name']		= 'Name';
$_['entry_description']	= 'Beschreibung';
$_['entry_approval']	= 'Neue Kunden genehmigen';
$_['entry_sort_order']	= 'Reihenfolge';

// Help
$_['help_approval']		= 'Neue Kunden müssen von einem Admin vor der ersten Anmeldung genehmigt werden';

// Error
$_['error_permission']	= 'Keine Rechte für diese Aktion';
$_['error_name']		= 'Name muss zwischen 3 und 32 Zeichen lang sein';
$_['error_default']		= 'Diese Kundengruppe kann nicht gelöscht werden da sie als Standardgruppe definiert ist';
$_['error_store']		= 'Diese Kundengruppe kann nicht gelöscht werden da sie aktuell %s Geschäften zugeordnet ist';
$_['error_customer']	= 'Diese Kundengruppe kann nicht gelöscht werden da sie aktuell %s Mitglied(er) zugeordnet ist';