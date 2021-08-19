<?php
/**
 * Get Address Lookup plugin for Craft CMS 3.x
 *
 * Uses the Get Address.io postcode lookup library to generate address information
 *
 * @link      https://www.creode.co.uk
 * @copyright Copyright (c) 2021 Creode
 */

namespace creode\getaddresslookuptests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use creode\getaddresslookup\GetAddressLookup;

/**
 * ExampleUnitTest
 *
 *
 * @author    Creode
 * @package   GetAddressLookup
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            GetAddressLookup::class,
            GetAddressLookup::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
