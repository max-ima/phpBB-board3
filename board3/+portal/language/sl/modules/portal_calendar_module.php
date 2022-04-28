<?php
/**
*
* @package Board3 Portal v2.1 - Calendar
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
	'PORTAL_CALENDAR'			=> 'Koledar',
	'VIEW_NEXT_MONTH'		=> 'Naslednji mesec',
	'VIEW_PREVIOUS_MONTH'	=> 'Prejšnji mesec',
	'EVENT_START'			=> 'Od',
	'EVENT_END'				=> 'Do',
	'EVENT_TIME'			=> 'Čas',
	'EVENT_ALL_DAY'			=> 'Celodnevni dogodek',
	'CURRENT_EVENTS'		=> 'Trenutni dogodki',
	'NO_CUR_EVENTS'			=> 'Ni trenutnih dogodkov',
	'UPCOMING_EVENTS'		=> 'Prihajajoči dogodki',
	'NO_UPCOMING_EVENTS'	=> 'Ni prihajajočih dogodkov',

	'mini_cal'	=> array(
		'day'	=> array(
			'1'	=> 'Ne',
			'2'	=> 'Po',
			'3'	=> 'To',
			'4'	=> 'Sr',
			'5'	=> 'Če',
			'6'	=> 'Pe',
			'7'	=> 'So',
		),

		'month'	=> array(
			'1'	=> 'Jan.',
			'2'	=> 'Feb.',
			'3'	=> 'Mar.',
			'4'	=> 'Apr.',
			'5'	=> 'Maj',
			'6'	=> 'Jun.',
			'7'	=> 'Jul.',
			'8'	=> 'Avg.',
			'9'	=> 'Sep.',
			'10'=> 'Okt.',
			'11'=> 'Nov.',
			'12'=> 'Dec.',
		),

		'long_month'=> array(
			'1'	=> 'Januar',
			'2'	=> 'Februar',
			'3'	=> 'Marec',
			'4'	=> 'April',
			'5'	=> 'Maj',
			'6'	=> 'Junij',
			'7'	=> 'Julij',
			'8'	=> 'Avgust',
			'9'	=> 'September',
			'10'=> 'Oktober',
			'11'=> 'November',
			'12'=> 'December',
		),
	),

	// ACP
	'ACP_PORTAL_CALENDAR'					=> 'Nastavitve koledarja',
	'ACP_PORTAL_CALENDAR_EXP'				=> 'Tukaj prilagodite koledarski blok.',
	'ACP_PORTAL_EVENTS'						=> 'Koledarski dogodki',
	'PORTAL_CALENDAR_TODAY_COLOR'			=> 'Aktivna dnevna barva',
	'PORTAL_CALENDAR_TODAY_COLOR_EXP'	=> 'Dovoljene so HEX ali poimenovane barve, kot je #FFFFFF za belo, ali imena barv(napišejo se v angleškem jeziku), kot je vijolična(violet).',
	'PORTAL_CALENDAR_SUNDAY_COLOR'			=> 'Barva za nedeljo',
	'PORTAL_CALENDAR_SUNDAY_COLOR_EXP'	=> 'Dovoljene so HEX ali poimenovane barve, kot je #FFFFFF za belo, ali imena barv(napišejo se v angleškem jeziku), kot je vijolična(violet).',
	'PORTAL_LONG_MONTH'						=> 'Pokaži polna imena mesecev',
	'PORTAL_LONG_MONTH_EXP'				=> 'Če je onemogočen, se meseci skrajšajo npr. Avg. namesto Avgust.',
	'PORTAL_SUNDAY_FIRST'					=> 'Prvi dan v tednu',
	'PORTAL_SUNDAY_FIRST_EXP'			=> 'Če je onemogočeno, bo koledar prikazal Po. --> Ne., sicer Ne. --> So.',
	'PORTAL_DISPLAY_EVENTS'					=> 'Prikaz dogodkov',
	'PORTAL_DISPLAY_EVENTS_EXP'				=> 'Prikaz dogodkov, ki so bili ustvarjeni v bloku koledarja',
	'PORTAL_EVENTS_MANAGE'					=> 'Upravljanje dogodkov',
	'NO_EVENT_TITLE'						=> 'Niste navedli naslova za dogodek.',
	'NO_EVENT_START'						=> 'Niste določili začetka dogodka.',
	'ADD_EVENT'								=> 'Dodaj nov dogodek',
	'EVENT_UPDATED'							=> 'Dogodek je bil uspešno posodobljen.',
	'EVENT_ADDED'							=> 'Dogodek je bil uspešno dodan.',
	'NO_EVENT'								=> 'Dogodek ni določen.',
	'EVENT_TITLE'							=> 'Naslov dogodka',
	'EVENT_DESC'							=> 'Opis dogodka',
	'EVENT_LINK'							=> 'Povezava do dogodka',
	'EVENT_LINK_EXP'						=> 'Vnesite povezavo do teme ali spletne strani z obvestilom ali temo razprave o dogodku.',
	'NO_EVENTS'								=> 'Brez dogodkov',
	'ACP_PORTAL_CALENDAR_START_INCORRECT'	=> 'Začetni čas, ki ste ga vnesli, je bil napačen. Prosimo, da natančno sledite navodilom.',
	'ACP_PORTAL_CALENDAR_END_INCORRECT'		=> 'Končni čas, ki ste ga vnesli, je bil napačen. Prosimo, da natančno sledite navodilom.',
	'ACP_PORTAL_CALENDAR_EVENT_PAST'		=> 'Začetni čas dogodka mora biti v prihodnosti.',
	'ACP_PORTAL_EVENT_START_DATE'			=> 'Začetni datum dogodka',
	'ACP_PORTAL_EVENT_START_DATE_EXP'		=> 'Vnesite datum in čas začetka dogodka. Datum mora biti v podobni obliki: MM/DD/YYYY 3:00 PM',
	'ACP_PORTAL_EVENT_END_DATE'			=> 'Končni datum dogodka',
	'ACP_PORTAL_EVENT_END_DATE_EXP'			=> 'Vnesite datum in čas konca dogodka. Datum mora biti v podobni obliki: MM/DD/YYYY 3:00 PM',
	'ACP_PORTAL_CALENDAR_EVENT_START_FIRST'	=> 'Konec dogodka mora biti po začetku dogodka.',
	'ACP_PORTAL_CALENDAR_PERMISSION'		=> 'Dovoljenja za dogodek',
	'ACP_PORTAL_CALENDAR_PERMISSION_EXP'	=> 'Izberite skupine, ki bi morale biti pooblaščene za ogled dogodka. Če želite, da si lahko vsi uporabniki ogledajo dogodek, ne izberite ničesar.<br />Izberite/Prekličite izbiro več skupin tako, da držite <samp>CTRL</samp> in kliknete.',
	'PORTAL_EVENTS_URL_NEW_WINDOW'			=> 'Odprite povezave do zunanjih dogodkov v novem oknu',

	// Logs
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Posodobljeni Dogodek</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Dodan Dogodek</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>Odstranjen Dogodek</strong><br />&raquo; %s',
));
