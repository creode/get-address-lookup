<?php
/**
 * Get Address Lookup plugin for Craft CMS 3.x
 *
 * Uses the Get Address.io postcode lookup library to generate address information
 *
 * @link      https://www.creode.co.uk
 * @copyright Copyright (c) 2021 Creode
 */

namespace creode\getaddresslookup\services;

use creode\getaddresslookup\GetAddressLookup;

use Craft;
use craft\base\Component;

/**
 * @author    Creode
 * @package   GetAddressLookup
 * @since     1.0.0
 */
class AddressLookup extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (GetAddressLookup::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
