<?php
/**
*
* @package Board3 Portal v2.1 - Attachments
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Slovenian Translation - Marko K.(max, max-ima,...)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'DOWNLOADS'				=> 'Prenosi',
	'NO_ATTACHMENTS'		=> 'Brez priponk',
	'PORTAL_ATTACHMENTS'	=> 'Priponke',

	// ACP
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'			=> 'Nastavitve priponk',
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXP'	=> 'Tu prilagodite blok priponk.',
	'PORTAL_ATTACHMENTS_NUMBER'							=> 'Omejitev prikazanih priponk',
	'PORTAL_ATTACHMENTS_NUMBER_EXP'					=> '0 pomeni neskončno',
	'PORTAL_ATTACHMENTS_FORUM_IDS'						=> 'Forumi za priponkami',
	'PORTAL_ATTACHMENTS_FORUM_IDS_EXP'				=> 'Forum(i), iz katerih naj bodo prikazane priponke. Če je "Izključi forume" nastavljeno na "Da", izberite forume, ki jih želite izključiti.<br />Če je "Izključi forume" nastavljeno na "Ne", izberite forume, ki jih želite videti.<br />Izberi/Prekliči izbor več forumov, tako da držite <samp>CTRL</samp> in kliknete.',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE'					=> 'Izključite forume',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE_EXP'			=> 'Izberite "Da", če želite izbrane forume izključiti iz bloka priponk, in "Ne", če želite v bloku priponk videti samo priponke izbranih forumov.',
	'PORTAL_ATTACHMENTS_MAX_LENGTH'						=> 'Omejitev znakov za vsako priponko',
	'PORTAL_ATTACHMENTS_MAX_LENGTH_EXP'				=> '0 pomeni neskončno',
	'PORTAL_ATTACHMENTS_FILETYPE' 						=> 'Vrste datotek',
	'PORTAL_ATTACHMENTS_FILETYPE_EXP' 				=> 'Če je "Izključi vrste datotek" nastavljeno na "Da", izberite vrste datotek, ki jih želite izključiti.<br />Če je "Izključi vrste datotek" nastavljeno na "Ne", izberite vrste datotek, ki jih želite videti.<br />Izberi/Prekliči izbiro več vrst datotek, tako da držite <samp>CTRL</samp> in kliknete.',
	'PORTAL_ATTACHMENTS_EXCLUDE'						=> 'Izključite vrste datotek',
	'PORTAL_ATTACHMENTS_EXCLUDE_EXP'				=> 'Izberite "Da", če želite izbrane vrste datotek izključiti iz bloka priponk, in "Ne", če želite v bloku pripok videti samo izbrane vrste datotek.',
));
