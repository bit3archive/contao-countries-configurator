<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Countries configurator extension for Contao Open Source CMS.
 *
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @package CountriesConfigurator
 * @license LGPL
 * @link    https://github.com/bit3/contao-countries-configurator
 */


class CountriesFilter extends Controller
{
	/**
	 * The singleton instance.
	 *
	 * @var CountriesFilter
	 */
	protected static $objInstance = null;

	/**
	 * Get the singleton instance.
	 *
	 * @static
	 * @return CountriesFilter|null
	 */
	public static function getInstance()
	{
		if (self::$objInstance === null) {
			self::$objInstance = new CountriesFilter();
		}
		return self::$objInstance;
	}

	/**
	 * Singleton constructor
	 */
	protected function __construct() {
		$this->import('Input');
		$this->import('Database');
	}

	/**
	 * Hook callback getCountries
	 *
	 * @param $return
	 * @return mixed
	 */
	public function hookGetContries(&$return, &$countries = array())
	{
		$arrCountries = null;  
    $return = array();   

		if (TL_MODE != 'BE' || \Input::get('do') != 'settings')
		{
			$arrGlobalCountries = deserialize($GLOBALS['TL_CONFIG']['system_countries'], true); 
			if (count($arrGlobalCountries))
			{
				$arrCountries = array_combine($arrGlobalCountries, $arrGlobalCountries);
			}        
		}

		if (TL_MODE == 'FE' && isset($GLOBALS['objPage']))
		{
			$objRoot = $this->getPageDetails($GLOBALS['objPage']->rootId);
			if ($objRoot->filter_countries)
			{
				$arrPageCountries = deserialize($objRoot->page_countries, true);

				if (count($arrPageCountries)) {
					$arrCountries = array_combine($arrPageCountries, $arrPageCountries);
				}
			}    
		}

		if (is_array($arrCountries)) {
      
			foreach ($countries as $strKey => $strCountry)
			{
				if (!isset($arrCountries[$strKey])) {
					unset($countries[$strKey]);
				}
			}

			foreach ($arrCountries as $strKey)
			{       
				$return[$strKey] = $countries[$strKey];
			}   
		}
	}
}
