<?php
/**
*
* @package Board3 Portal v2.1 - Links
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
	'PORTAL_LINKS'		=> 'Povezave',
	'LINKS_NO_LINKS'	=> 'Brez povezav',

	// ACP
	'ACP_PORTAL_LINKS'				=> 'Nastavitve povezave',
	'ACP_PORTAL_LINKS_EXP'			=> 'Prilagodite povezave, navedene v bloku povezav',
	'ACP_PORTAL_LINK_TITLE'			=> 'Naslov',
	'ACP_PORTAL_LINK_TYPE'			=> 'Vrsta povezave',
	'ACP_PORTAL_LINK_TYPE_EXP'		=> 'Če imate povezavo do strani na vašem forumu, izberite "Notranja povezava", da preprečite neželene odjave.',
	'ACP_PORTAL_LINK_INT'			=> 'Notranja povezava',
	'ACP_PORTAL_LINK_EXT'			=> 'Zunanja povezava',
	'ACP_PORTAL_LINK_ADD'			=> 'Dodajte novo navigacijsko povezavo',
	'ACP_PORTAL_LINK_URL'			=> 'URL povezave',
	'ACP_PORTAL_LINK_URL_EXP'		=> 'Zunanje povezave:<br />Vse povezave je treba vnesti s http(s)://<br /><br />Notranje povezave:<br />Datoteko php vnesite samo kot URL povezave, tj. index.php?style=4.',
	'ACP_PORTAL_LINK_PERMISSION'	=> 'Dovoljenja za povezavo',
	'ACP_PORTAL_LINK_PERMISSION_EXP'=> 'Izberite skupine, ki bi morale biti pooblaščene za ogled povezave. Če želite, da si vsi uporabniki lahko ogledajo povezavo, ne izberite ničesar.<br />Izberite/Prekličite izbiro več skupin tako, da držite <samp>CTRL</samp> in kliknete.',
	'ACP_PORTAL_LINKS_NEW_WINDOW'	=> 'Odprite zunanje povezave v novem oknu',

	// Errors
	'NO_LINK_TITLE'					=> 'Za to povezavo morate vnesti naslov.',
	'NO_LINK_URL'					=> 'Vnesti morate URL povezave.',
));
