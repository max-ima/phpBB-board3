<?php
/**
*
* @package Board3 Portal v2.1 - News
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
	'LATEST_NEWS'			=> 'Zadnje novice',
	'READ_FULL'				=> 'Preberite vse',
	'NO_NEWS'				=> 'Brez novic',
	'POSTED_BY'				=> 'Napisal/a',
	'COMMENTS'				=> 'Komentarji',
	'VIEW_COMMENTS'			=> 'Poglej komentarje',
	'PORTAL_POST_REPLY'		=> 'Napišite komentarje',
	'TOPIC_VIEWS'			=> 'Pogledi',
	'JUMP_NEWEST'			=> 'Skoči na najnovejšo objavo',
	'JUMP_FIRST'			=> 'Skoči na prvo objavo',
	'JUMP_TO_POST'			=> 'Skoči na objavo',

	// ACP
	'ACP_PORTAL_NEWS_SETTINGS'			=> 'Nastavitve novic',
	'ACP_PORTAL_NEWS_SETTINGS_EXP'	=> 'Tukaj prilagodite blok novic.',
	'PORTAL_NEWS_STYLE'					=> 'Kompakten slog novic',
	'PORTAL_NEWS_STYLE_EXP'			=> '"Da" pomeni uporabo kompaktnega sloga za novice. "Ne" pomeni uporabo velikega sloga (pogled besedila).',
	'PORTAL_SHOW_ALL_NEWS'				=> 'Pokaži vse članke na tem forumu',
	'PORTAL_SHOW_ALL_NEWS_EXP'		=> 'Vključuje Lepljivek.',
	'PORTAL_NUMBER_OF_NEWS'				=> 'Število novic na portalu',
	'PORTAL_NUMBER_OF_NEWS_EXP'		=> '0 pomeni neskončno',
	'PORTAL_NEWS_LENGTH'				=> 'Največja dolžina članka z novico',
	'PORTAL_NEWS_LENGTH_EXP'		=> '0 pomeni neskončno',
	'PORTAL_NEWS_FORUM' 				=> 'Forumi z novicami',
	'PORTAL_NEWS_FORUM_EXP' 		=> 'Forum(i) iz katerega povlečemo članke, pustite prazno, da povlečete iz vseh forumov. Če je "Izključi forume" nastavljeno na "Da", izberite forume, ki jih želite izključiti.<br />Če je "Izključi forume" nastavljeno na "Ne", izberite forume, ki jih želite videti.<br />Izberi/Prekliči izbor več forumov, tako da držite <samp>CTRL</samp> in kliknete.',
	'PORTAL_NEWS_EXCLUDE'				=> 'Izključite forume',
	'PORTAL_NEWS_EXCLUDE_EXP'		=> 'Izberite "Da", če želite izbrane forume izključiti iz bloka novic, in "Ne", če želite v bloku novic videti samo izbrane forume.',
	'PORTAL_NEWS_PERMISSIONS'			=> 'Omogoči/onemogoči dovoljenja',
	'PORTAL_NEWS_PERMISSIONS_EXP'	=> 'Pri prikazovanju novic upoštevajte dovoljenja za ogled foruma',
	'PORTAL_NEWS_SHOW_LAST'				=> 'Razvrsti po najnovejših objavah',
	'PORTAL_NEWS_SHOW_LAST_EXP'		=> 'Ko je aktivirana, bodo najnovejše razvrščene po najnovejših objavah. Ko je deaktivirana, bodo novice razvrščene glede na najnovejšo temo.',
	'PORTAL_NEWS_ARCHIVE'				=> 'Omogočite sistem arhiviranja novic',
	'PORTAL_NEWS_ARCHIVE_EXP'		=> 'Če je omogočeno, bo prikazan sistem arhiva novic/številke strani.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Prikažite število odgovorov in ogledov',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> 'Ta nastavitev se nanaša na kompaktni blok.<br />Če je Da, je število odgovorov in ogledov prikazano v 2 dodatnih stolpcih. Če Ne, bodo poleg imena foruma prikazani odgovori in ogledi. Izberite Ne, če imate težave s prikazom dodatnih stolpcev zaradi zahtevane dodatne širine.',
));
