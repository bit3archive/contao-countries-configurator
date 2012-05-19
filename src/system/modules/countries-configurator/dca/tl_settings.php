<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Countries configurator extension for Contao Open Source CMS.
 *
 * @author  Tristan Lins <tristan.lins@infinitysoft.de>
 * @package CountriesConfigurator
 * @license LGPL
 * @link    https://github.com/InfinitySoft/contao-countries-configurator
 */


/**
 * System configuration
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{countries_legend:hide},system_countries';

$GLOBALS['TL_DCA']['tl_settings']['fields']['system_countries'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['system_countries'],
	'inputType' => 'checkboxWizard',
	'options'   => $this->getCountries(),
	'eval'      => array('multiple' => true)
);
