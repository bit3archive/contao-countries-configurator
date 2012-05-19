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
 * Table tl_page
 */
MetaPalettes::appendBefore('tl_page', 'root', 'publish', array('countries' => array(':hide', 'filter_countries')));
$GLOBALS['TL_DCA']['tl_page']['metasubpalettes']['filter_countries'] = array('page_countries');


$GLOBALS['TL_DCA']['tl_page']['fields']['filter_countries'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['filter_countries'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true)
);

$GLOBALS['TL_DCA']['tl_page']['fields']['page_countries'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['page_countries'],
	'exclude'   => true,
	'inputType' => 'checkboxWizard',
	'options'   => $this->getCountries(),
	'eval'      => array('multiple' => true)
);
