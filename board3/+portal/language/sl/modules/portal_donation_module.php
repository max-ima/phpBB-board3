<?php
/**
*
* @package Board3 Portal v2.1 - Donation
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
	'DONATION' 		=> 'PayPal donacije',
	'DONATION_TEXT'	=> 'je skupina, ki opravlja storitve brez namena kakršnega koli denarnega dobička. Vaše donacije so dobrodošle, da lahko pokrijemo stroške našega strežnika, imena domene itd.',
	'PAY_MSG'       => 'Za ločilo uporabite decimalno vejico (ne vejico), npr. 3.50',
	'PAY_ITEM'		=> 'Donirajte!', // paypal item

	'AUD'						=> 'Australian Dollars (AUD)',
	'CAD'						=> 'Canadian Dollars (CAD)',
	'CZK'						=> 'Czech Koruna (CZK)',
	'DKK'						=> 'Danish Kroner (DKK)',
	'HKD'						=> 'Hong Kong Dollars (HKD)',
	'HUF'						=> 'Hungarian Forint (HUF)',
	'NZD'						=> 'New Zealand Dollars (NZD)',
	'NOK'						=> 'Norwegian Kroner (NOK)',
	'PLN'						=> 'Polish Zlotych (PLN)',
	'GBP'						=> 'British Pounds (GBP)',
	'SGD'						=> 'Singapore Dollars (SGD)',
	'SEK'						=> 'Swedish Kronor (SEK)',
	'CHF'						=> 'Swiss Francs (CHF)',
	'JPY'						=> 'Japanese Yen (JPY)',
	'USD'						=> 'U.S. Dollars (USD)',
	'EUR'						=> 'Euros (EUR)',
	'MXN'						=> 'Mexican Pesos (MXN)',
	'ILS'						=> 'Israeli New Shekels (ILS)',

	// ACP
	'ACP_PORTAL_PAYPAL_SETTINGS'			=> 'Paypal nastavitve',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXP'		=> 'Tukaj prilagodite blok Paypal.',
	'PORTAL_PAY_ACC'						=> 'Paypal račun za uporabo',
	'PORTAL_PAY_ACC_EXP'					=> 'Vnesite svoj Paypal e-poštni naslov npr. xxx@xxx.com',
	'PORTAL_PAY_CUSTOM'						=> 'Donaciji Paypal dodajte uporabniško ime',
	'PORTAL_PAY_DEFAULT'					=> 'Privzeta valuta',
	'PORTAL_PAY_DEFAULT_EXP'				=> 'Valuta, ki bo privzeto izbrana na spustnem seznamu valut.'
));
