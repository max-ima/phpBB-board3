<?php
/**
*
* @package Board3 Portal v2.1 - Poll
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
	'PORTAL_POLL'			=> 'Anketa',
	'LATEST_POLLS'			=> 'Najnovejše Ankete',
	'NO_OPTIONS'			=> 'Ta anketa nima razpoložljivih možnosti.',
	'NO_POLL'				=> 'Ankete niso na voljo',
	'RETURN_PORTAL'			=> '%sVrnite se na portal%s',

	// ACP
	'ACP_PORTAL_POLLS_SETTINGS'			=> 'Nastavitve ankete',
	'ACP_PORTAL_POLLS_SETTINGS_EXP'	=> 'Tukaj prilagodite blok ankete.',
	'PORTAL_POLL_TOPIC_ID'				=> 'Anketni forum(i)',
	'PORTAL_POLL_TOPIC_ID_EXP'		=> 'Forum(i), iz katerega naj bodo prikazane ankete. Če je "Izključi forume" nastavljeno na "Da", izberite forume, ki jih želite izključiti.<br />Če je "Izključi forume" nastavljeno na "Ne", izberite forume, ki jih želite videti.<br />Izberi/Prekliči izbor več forumov, tako da držite <samp>CTRL</samp> in kliknete.',
	'PORTAL_POLL_EXCLUDE_ID'			=> 'Izključi forume',
	'PORTAL_POLL_EXCLUDE_ID_EXP'	=> 'Izberite "Da", če želite izbrane forume izključiti iz bloka z anketami, in "Ne", če želite videti samo ankete iz izbranih forumov v bloku anket.',
	'PORTAL_POLL_LIMIT'					=> 'Omejitev prikaza ankete',
	'PORTAL_POLL_LIMIT_EXP'			=> 'Število anket, ki jih želite prikazati na strani portala.',
	'PORTAL_POLL_ALLOW_VOTE'			=> 'Dovoli glasovanje',
	'PORTAL_POLL_ALLOW_VOTE_EXP'	=> 'Dovoli uporabnikom z zahtevanimi dovoljenji glasovanje na strani portala.',
	'PORTAL_POLL_HIDE'					=> 'Skrij potekle ankete?',
));
