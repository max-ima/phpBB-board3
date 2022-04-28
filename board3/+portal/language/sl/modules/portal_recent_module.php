<?php
/**
*
* @package Board3 Portal v2.1 - Recent
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
	'PORTAL_RECENT'				=> 'Nedavno',
	'PORTAL_RECENT_TOPIC'		=> 'Nadavne teme',
	'PORTAL_RECENT_ANN'			=> 'Nedavna obvestila',
	'PORTAL_RECENT_HOT_TOPIC'	=> 'Nedavno priljubljene teme',

	// ACP
	'ACP_PORTAL_RECENT_SETTINGS'			=> 'Nastavitve nedavnih tem',
	'ACP_PORTAL_RECENT_SETTINGS_EXP'	=> 'Tukaj prilagodite blok nedavnih tem.',
	'PORTAL_MAX_TOPIC'						=> 'Omejitev nedavnih objav/vročih tem',
	'PORTAL_MAX_TOPIC_EXP'				=> '0 pomeni neskončno',
	'PORTAL_RECENT_TITLE_LIMIT'				=> 'Omejitev znakov za vsako nedavno temo',
	'PORTAL_RECENT_TITLE_LIMIT_EXP'		=> '0 pomeni neskončno',
	'PORTAL_RECENT_FORUM'					=> 'Forumi z nedavnimi temami',
	'PORTAL_RECENT_FORUM_EXP'			=> 'Forum(i), iz katerega povlečemo teme, pustite prazno, da povlečete iz vseh forumov. Če je "Izključi forume" nastavljeno na "Da", izberite forume, ki jih želite izključiti.<br />Če je "Izključi forume" nastavljeno na "Ne", izberite forume, ki jih želite videti.<br />Izberi/Prekliči izbor več forumov, tako da držite <samp>CTRL</samp> in kliknete.',
	'PORTAL_EXCLUDE_FORUM'					=> 'Izključite Forume',
	'PORTAL_EXCLUDE_FORUM_EXP'			=> 'Izberite "Da", če želite izbrane forume izključiti iz bloka nedavnih tem, in "Ne", če želite videti samo izbrane forume v bloku nedavnih tem.',
));
