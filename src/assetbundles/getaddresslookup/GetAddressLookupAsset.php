<?php
/**
 * Get Address Lookup plugin for Craft CMS 3.x
 *
 * Uses the Get Address.io postcode lookup library to generate address information
 *
 * @link      https://www.creode.co.uk
 * @copyright Copyright (c) 2021 Creode
 */

namespace creode\getaddresslookup\assetbundles\getaddresslookup;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Creode
 * @package   GetAddressLookup
 * @since     1.0.0
 */
class GetAddressLookupAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@creode/getaddresslookup/assetbundles/getaddresslookup/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/GetAddressLookup.js',
        ];

        $this->css = [
            'css/GetAddressLookup.css',
        ];

        parent::init();
    }
}
