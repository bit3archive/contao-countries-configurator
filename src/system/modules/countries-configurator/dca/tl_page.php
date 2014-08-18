<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Countries configurator extension for Contao Open Source CMS.
 *
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @package CountriesConfigurator
 * @license LGPL
 * @link    https://github.com/bit3/contao-countries-configurator
 */


/**
 * Extend tl_page palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace(';{publish_legend', ';{countries_legend},filter_countries,page_countries;{publish_legend', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace(';{publish_legend', ';{countries_legend},filter_countries,page_countries;{publish_legend', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);


$GLOBALS['TL_DCA']['tl_page']['fields']['filter_countries'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['filter_countries'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true),
  'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['page_countries'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['page_countries'],
	'exclude'   => true,
	'inputType' => 'checkboxWizard',
	'options'   => $this->getCountries(),
	'eval'      => array('multiple' => true),
  'sql'       => "text NULL"
);
