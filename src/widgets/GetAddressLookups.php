<?php
/**
 * Get Address Lookup plugin for Craft CMS 3.x
 *
 * Uses the Get Address.io postcode lookup library to generate address information
 *
 * @link      https://www.creode.co.uk
 * @copyright Copyright (c) 2021 Creode
 */

namespace creode\getaddresslookup\widgets;

use creode\getaddresslookup\GetAddressLookup;
use creode\getaddresslookup\assetbundles\getaddresslookupswidget\GetAddressLookupsWidgetAsset;

use Craft;
use craft\base\Widget;

/**
 * Get Address Lookup Widget
 *
 * @author    Creode
 * @package   GetAddressLookup
 * @since     1.0.0
 */
class GetAddressLookups extends Widget
{

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $message = 'Hello, world.';

    // Static Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('get-address-lookup', 'GetAddressLookups');
    }

    /**
     * @inheritdoc
     */
    public static function iconPath()
    {
        return Craft::getAlias("@creode/getaddresslookup/assetbundles/getaddresslookupswidget/dist/img/GetAddressLookups-icon.svg");
    }

    /**
     * @inheritdoc
     */
    public static function maxColspan()
    {
        return null;
    }

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge(
            $rules,
            [
                ['message', 'string'],
                ['message', 'default', 'value' => 'Hello, world.'],
            ]
        );
        return $rules;
    }

    /**
     * @inheritdoc
     */
    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate(
            'get-address-lookup/_components/widgets/GetAddressLookups_settings',
            [
                'widget' => $this
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function getBodyHtml()
    {
        Craft::$app->getView()->registerAssetBundle(GetAddressLookupsWidgetAsset::class);

        return Craft::$app->getView()->renderTemplate(
            'get-address-lookup/_components/widgets/GetAddressLookups_body',
            [
                'message' => $this->message
            ]
        );
    }
}
