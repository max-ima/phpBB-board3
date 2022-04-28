<?php
/**
*
* @package Board3 Portal v2.1 - Announcements
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
	'LATEST_ANNOUNCEMENTS'		=> 'Najnovejše globalne obvestila',
	'GLOBAL_ANNOUNCEMENTS'		=> 'Globalna obvestila',
	'GLOBAL_ANNOUNCEMENT'		=> 'Globalno obvestilo',
	'VIEW_LATEST_ANNOUNCEMENT'  => '1 obvestilo',
	'VIEW_LATEST_ANNOUNCEMENTS' => '%d obvestila',
	'READ_FULL'					=> 'Preberite vse',
	'NO_ANNOUNCEMENTS'			=> 'Brez globalnih obvestil',
	'POSTED_BY'					=> 'Objavil',
	'COMMENTS'					=> 'Komentarji',
	'VIEW_COMMENTS'				=> 'Poglej komentarje',
	'PORTAL_POST_REPLY'			=> 'Napišite komentarje',
	'TOPIC_VIEWS'				=> 'Pogledi',
	'JUMP_NEWEST'				=> 'Skoči na najnovejšo objavo',
	'JUMP_FIRST'				=> 'Skoči na prvo objavo',
	'JUMP_TO_POST'				=> 'Skoči na objavo',

	// ACP
	'ACP_PORTAL_ANNOUNCE_SETTINGS'				=> 'Nastavitve globalnih obvestil',
	'ACP_PORTAL_ANNOUNCE_SETTINGS_EXP'		=> 'Tukaj prilagodite globalni blok obvestil.',
	'PORTAL_ANNOUNCEMENTS'						=> 'Prikaži globalna obvestila',
	'PORTAL_ANNOUNCEMENTS_EXP'				=> 'Prikaži ta blok na portalu.',
	'PORTAL_ANNOUNCEMENTS_STYLE'				=> 'Kompaktni slog bloka globalnih obvestil',
	'PORTAL_ANNOUNCEMENTS_STYLE_EXP'		=> '"Da" pomeni uporabo kompaktnega sloga za globalna obvestila. "Ne" pomeni uporabo velikega sloga (pogled besedila).',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS'			=> 'Število obvestil na portalu',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS_EXP'	=> '0 pomeni neskončno',
	'PORTAL_ANNOUNCEMENTS_DAY'					=> 'Število dni za prikaz obvestila',
	'PORTAL_ANNOUNCEMENTS_DAY_EXP'			=> '0 pomeni neskončno',
	'PORTAL_ANNOUNCEMENTS_LENGTH'				=> 'Največja velikost/dolžina globalnih obvestil',
	'PORTAL_ANNOUNCEMENTS_LENGTH_EXP'		=> '0 pomeni neskončno',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM'			=> 'Forumi za obvestila',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM_EXP'	=> 'Forum(i), s katerih pridobivamo obvestila. Pustite to prazno, če želite pridobiti obvestila z vseh forumov. Če je "Izključi forume" nastavljeno na "Da", izberite forume, ki jih želite izključiti.<br />Če je "Izključi forume" nastavljeno na "Ne", izberite forume, ki jih želite videti.<br />Izberi/Prekliči izbor več forumov, tako da držite <samp>CTRL</samp> in kliknete.',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE'		=> 'Izključite forume',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE_EXP'=> 'Izberite "Da", če želite izbrane forume izključiti iz bloka z objavami, in "Ne", če želite videti samo izbrane forume v bloku obvestil.',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS'			=> 'Omogoči/onemogoči dovoljenja',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS_EXP'	=> 'Ko prikazujete obvestila, upoštevajte uporabnikova dovoljenja za ogled foruma.',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE'				=> 'Omogočite sistem arhiviranja obvestil',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE_EXP'		=> 'Če je omogočeno, bo prikazan sistem arhiva objav / številke strani.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Prikažite število odgovorov in ogledov',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> 'Ta nastavitev se nanaša na kompaktni blok.<br />Če je Da, je število odgovorov in ogledov prikazano v 2 dodatnih stolpcih. Če je Ne, bodo poleg imena foruma prikazani odgovori in ogledi. Izberite Ne, če imate težave s prikazom dodatnih stolpcev zaradi zahtevane dodatne širine.',
));
