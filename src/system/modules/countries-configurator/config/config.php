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
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getCountries'][] = array('CountriesFilter', 'hookGetContries');
