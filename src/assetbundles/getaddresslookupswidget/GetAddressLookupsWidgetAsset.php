<?php
/**
 * Get Address Lookup plugin for Craft CMS 3.x
 *
 * Uses the Get Address.io postcode lookup library to generate address information
 *
 * @link      https://www.creode.co.uk
 * @copyright Copyright (c) 2021 Creode
 */

namespace creode\getaddresslookup\assetbundles\getaddresslookupswidget;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Creode
 * @package   GetAddressLookup
 * @since     1.0.0
 */
class GetAddressLookupsWidgetAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@creode/getaddresslookup/assetbundles/getaddresslookupswidget/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/GetAddressLookups.js',
        ];

        $this->css = [
            'css/GetAddressLookups.css',
        ];

        parent::init();
    }
}
