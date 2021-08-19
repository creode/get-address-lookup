<?php
/**
 * Get Address Lookup plugin for Craft CMS 3.x
 *
 * Uses the Get Address.io postcode lookup library to generate address information
 *
 * @link      https://www.creode.co.uk
 * @copyright Copyright (c) 2021 Creode
 */

namespace creode\getaddresslookup\variables;

use creode\getaddresslookup\GetAddressLookup;

use Craft;

/**
 * @author    Creode
 * @package   GetAddressLookup
 * @since     1.0.0
 */
class GetAddressLookupVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
