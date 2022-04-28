<?php
/**
*
* @package Board3 Portal v2.1 - Custom
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
	'PORTAL_CUSTOM'		=> 'Blok po meri',

	// ACP
	'ACP_PORTAL_CUSTOM_SETTINGS'			=> 'Nastavitve Blok po meri',
	'ACP_PORTAL_CUSTOM_SETTINGS_EXP'		=> 'Tukaj lahko uredite svoj Blok po meri',
	'ACP_PORTAL_CUSTOM_CODE_SHORT'			=> 'Koda, ki ste jo vnesli, ni dovolj dolga.',
	'ACP_PORTAL_CUSTOM_PREVIEW'				=> 'Predogled',
	'ACP_PORTAL_CUSTOM_CODE'				=> 'Koda Bloka po meri',
	'ACP_PORTAL_CUSTOM_CODE_EXP'			=> 'Tukaj spremenite kodo za majhen blok po meri (HTML ali BBKode).',
	'ACP_PORTAL_CUSTOM_PERMISSION'			=> 'Dovoljenja za blok po meri',
	'ACP_PORTAL_CUSTOM_PERMISSION_EXP'		=> 'Izberite skupine, ki bi si morale ogledati Blok po meri. Če želite, da si vsi uporabniki lahko ogledajo Blok po meri, ne izberite ničesar.<br />Izberite/Prekličite izbiro več skupin tako, da držite <samp>CTRL</samp> in kliknete.',
	'ACP_PORTAL_CUSTOM_BBCODE'				=> 'Aktivirajte BBKode za Blok po meri',
	'ACP_PORTAL_CUSTOM_BBCODE_EXP'			=> 'V tem polju bi lahko uporabili BBKode. Če BBKode ni aktiviran, bo HTML razčlenjen.',
));
