<?php
/**
*
* @package Board3 Portal v2.1
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
	'ACP_PORTAL_MODULES'		=> 'Moduli portala',
	'ACP_PORTAL'			=> 'Portal',
	'ACP_PORTAL_GENERAL_INFO'	=> 'Splošne nastavitve',
	'ACP_PORTAL_UPLOAD'		=> 'Modul za nalaganje',

	// Portal logs
	'LOG_PORTAL_LINK_ADDED'				=> '<strong>Spremenjene nastavitve portala</strong><br />&raquo; Povezava je dodana: %s ',
	'LOG_PORTAL_LINK_UPDATED'			=> '<strong>Spremenjene nastavitve portala</strong><br />&raquo; Povezava posodobljena: %s ',
	'LOG_PORTAL_LINK_REMOVED'			=> '<strong>Spremenjene nastavitve portala</strong><br />&raquo; Povezava je odstranjena: %s ',
	'LOG_PORTAL_EVENT_ADDED'			=> '<strong>Spremenjene nastavitve portala</strong><br />&raquo; Dogodek je dodan: %s ',
	'LOG_PORTAL_EVENT_UPDATED'			=> '<strong>Spremenjene nastavitve portala</strong><br />&raquo; Dogodek posodobljen: %s ',
	'LOG_PORTAL_EVENT_REMOVED'			=> '<strong>Spremenjene nastavitve portala</strong><br />&raquo; Dogodek je odstranjen: %s ',
	'LOG_PORTAL_CONFIG'					=> '<strong>Spremenjene nastavitve portala</strong><br />&raquo; %s',
));
