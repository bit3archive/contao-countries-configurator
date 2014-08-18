<?php

/**
 * Countries configurator extension for Contao Open Source CMS.
 *
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @package CountriesConfigurator
 * @license LGPL
 * @link    https://github.com/bit3/contao-countries-configurator
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'CountriesFilter' => 'system/modules/countries-configurator/CountriesFilter.php',
));
