<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 16:46
 */

namespace tests;

use lib\UpperCase;

/**
 * Class UpperCaseTest
 * @package tests
 */
class UpperCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testUpperCaseFirstSymbols()
    {
        $this->assertEquals(
            '1TestTest23Test4',
            UpperCase::upperCaseFirstSymbols('1_test_test23test4')
        );
    }

    public function testMakeGetterMethodByField()
    {
        $this->assertEquals(
            'getTestTest23Test',
            UpperCase::makeGetterMethodByField('_test_test23test')
        );
    }

    public function testMakeSetterMethodByField()
    {
        $this->assertEquals(
            'setTestTestTest',
            UpperCase::makeSetterMethodByField('test_test_test')
        );
    }
}
