<?php
namespace ResultsNamespace\Module\Results\Site\Helper;

defined('_JEXEC') or die;

/**
 * Helper for mod_results
 *
 * @since  4.0
 */
class ResultsHelper
{
	/**
	 * Retrieve Results
	 *
	 * @param   Registry        $params  The module parameters
	 * @param   CMSApplication  $app     The application
	 *
	 * @return  array
	 */
	public static function getResults()
	{
        $url = 'https://carolineolds-strapi-dev.q.starberry.com/properties?_limit=20'; 
	
		$property_json_data = file_get_contents($url);
		if (false === $property_json_data) {
			throw new Exception('Fetch Data failed');
	    }
		
		$property_object = json_decode($property_json_data, true);
		if (null === $property_object) {
			throw new Exception('Data Decode failed');
		}
		
		if (isset($property_object)) {
			return $property_object;
		}else {
			throw new Exception('No Data Found');
		}
		
		return null;
		
	}
}
