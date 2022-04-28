<?php
/**
*
* @package Board3 Portal v2.1
* @copyright (c) 2014 Board3 Group ( www.board3.de )
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
	// Portal Modules
	'ACP_PORTAL_MODULES_EXP'		=> 'Tukaj lahko upravljate svoje module portala. Če izklopite vse module, onemogočite tudi portal.',

	'MODULE_POS_TOP'				=> 'Vrh',
	'MODULE_POS_LEFT'				=> 'Levi stolpec',
	'MODULE_POS_RIGHT'				=> 'Desni stolpec',
	'MODULE_POS_CENTER'				=> 'Sredinski stolpec',
	'MODULE_POS_BOTTOM'				=> 'Dno',
	'ADD_MODULE'					=> 'Dodajte modul',
	'CHOOSE_MODULE'					=> 'Izberite modul',
	'CHOOSE_MODULE_EXP'				=> 'Na spustnem seznamu izberite modul',
	'SUCCESS_ADD'					=> 'Modul je bil uspešno dodan.',
	'SUCCESS_DELETE'				=> 'Modul je bil uspešno odstranjen.',
	'NO_MODULES'					=> 'Noben modul ni bil zaznan.',
	'MOVE_RIGHT'					=> 'Premakni desno',
	'MOVE_LEFT'						=> 'Premakni levo',
	'B3P_FILE_NOT_FOUND'			=> 'Zahtevane datoteke ni bilo mogoče najti',
	'UNABLE_TO_MOVE'				=> 'Bloka ni mogoče premakniti v izbrani stolpec.',
	'UNABLE_TO_MOVE_ROW'			=> 'Bloka ni mogoče premakniti v izbrano vrstico.',
	'UNABLE_TO_ADD_MODULE'			=> 'Modula ni mogoče dodati v izbrani stolpec.',
	'DELETE_MODULE_CONFIRM'			=> 'Ali ste prepričani, da želite izbrisati modul "%1$s"?',
	'MODULE_RESET_SUCCESS'			=> 'Uspešno ponastavite nastavitve modula.',
	'MODULE_RESET_CONFIRM'			=> 'Ali ste prepričani, da želite ponastaviti nastavitve modula  "%1$s"?',
	'MODULE_NOT_EXISTS'				=> 'Izbrani modul ne obstaja.',

	'MODULE_OPTIONS'			=> 'Možnosti modula',
	'MODULE_NAME'				=> 'Ime modula',
	'MODULE_NAME_EXP'			=> 'Vnesite ime modula, ki naj bo prikazan v konfiguraciji modula.',
	'MODULE_IMAGE'				=> 'Slika modula',
	'MODULE_IMAGE_EXP'			=> 'Vnesite ime datoteke slike modula. Slike morajo biti v vseh mapah styles/{yourstyle}/theme/images/portal/',
	'MODULE_PERMISSIONS'		=> 'Dovoljenja za modul',
	'MODULE_PERMISSIONS_EXP'	=> 'Izberite skupine, ki bi morale biti pooblaščene za ogled modula. Če želite, da si vsi uporabniki lahko ogledajo modul, ne izberite ničesar.<br />Izberite/prekličite izbiro več skupin tako, da držite <samp>CTRL</samp> in kliknete.',
	'MODULE_IMAGE_WIDTH'		=> 'Širina slike modula',
	'MODULE_IMAGE_WIDTH_EXP'	=> 'Vnesite širino slike modula v slikovnih pikah (pixels)',
	'MODULE_IMAGE_HEIGHT'		=> 'Višina slike modula',
	'MODULE_IMAGE_HEIGHT_EXP'	=> 'Vnesite višino slike modula v slikovnih pikah (pixels)',
	'MODULE_RESET'				=> 'Ponastavite konfiguracijo modula',
	'MODULE_RESET_EXP'			=> 'To bo ponastavilo vse nastavitve na privzete!',
	'MODULE_STATUS'				=> 'Omogoči modul',
	'MODULE_ADD_ONCE'			=> 'Ta modul je mogoče dodati samo enkrat.',
	'MODULE_IMAGE_ERROR'		=> 'Pri iskanju slike modula je prišlo do napake:',
	'UNKNOWN_MODULE_METHOD'		=> 'Metode modula %1$s ni bilo mogoče razrešiti.',

	// general
	'ACP_PORTAL_CONFIG_INFO'				=> 'Splošne nastavitve',
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Administracija portala',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> 'Hvala, ker ste izbrali Board3 Portal! Tukaj lahko upravljate svojo stran portala. Spodnje možnosti vam omogočajo prilagajanje različnih splošnih nastavitev.',
	'ACP_PORTAL_SHOW_ALL'					=> 'Prikaz portala na vseh straneh',
	'ACP_PORTAL_SHOW_ALL_EXP'				=> 'Prikaži portal na vseh straneh',
	'PORTAL_ENABLE'							=> 'Omogoči portal',
	'PORTAL_ENABLE_EXP'						=> 'Vklopi ali izklopi celoten portal',
	'PORTAL_LEFT_COLUMN'					=> 'Omogoči levi stolpec',
	'PORTAL_LEFT_COLUMN_EXP'				=> 'Preklopite na ne, če želite izklopiti levi stolpec',
	'PORTAL_RIGHT_COLUMN'					=> 'Omogoči desni stolpec',
	'PORTAL_RIGHT_COLUMN_EXP'				=> 'Preklopite na ne, če želite izklopiti desni stolpec',
	'PORTAL_DISPLAY_JUMPBOX'				=> 'Prikaži jumpbox',
	'PORTAL_DISPLAY_JUMPBOX_EXP'			=> 'Prikaži jumpbox na portalu. Skočni okvir bo prikazan samo, če je omogočen tudi v funkcijah plošče.',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> 'Nastavitve širine levega in desnega stolpca',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> 'Širina levega stolpca',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> 'Spremenite širino levega stolpca v slikovnih pikah (pixels); priporočena vrednost je 180',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> 'Širina desnega stolpca',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> 'Spremenite širino desnega stolpca v slikovnih pikah (pixels); priporočena vrednost je 180',
	'PORTAL_SHOW_ALL_SIDE'					=> 'Stolpec za prikaz na vseh straneh',
	'PORTAL_SHOW_ALL_SIDE_EXP'				=> 'Izberite, kateri stolpec naj bo prikazan na vseh straneh.',
	'PORTAL_SHOW_ALL_LEFT'					=> 'Levi',
	'PORTAL_SHOW_ALL_RIGHT'					=> 'Desni',

	'LINK_ADDED'							=> 'Povezava je bila uspešno dodana',
	'LINK_UPDATED'							=> 'Povezava je bila uspešno posodobljena',

	// Install
	'PORTAL_BASIC_INSTALL'			=> 'Dodajanje osnovnega nabora modulov',
	'PORTAL_BASIC_UNINSTALL'		=> 'Odstranjevanje modulov iz baze podatkov',

	// Font Awesome
	'ACP_FA'				=> 'Font Awesome slogi',
	'ACP_FA_EXP'			=> 'Tukaj lahko določite, kateri slogi naj uporabljajo ikone Font Awesome.',
	'MODULE_FA'				=> 'Ikona Font Awesome',
	'MODULE_FA_EXP'			=> 'Tukaj lahko izberete ikono Font Awesome. To bo uporabljeno, ko izbrani slog uporablja ikone Font Awesome.',
	'MODULE_FA_SIZE'		=> 'Velikost ikone Font Awesome',
	'MODULE_FA_SIZE_EXP'	=> 'Tukaj lahko spremenite velikost ikone Font Awesome v slikovnih pikah (pixel).',
));
