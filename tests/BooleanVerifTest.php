<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 25/11/2014
 * Time: 14:05
 */

namespace Tests\Rendu\Verification;

use Rendu\Verification\BooleanVerif;

class BooleanVerifTest extends \PHPUnit_Framework_TestCase
{
    public function testIsTrue()
    {
        $boolean = true;

        $result = BooleanVerif::isTrue($boolean);

        $this->assertTrue($result);
    }

    public function testIsFalse()
    {
        $boolean = false;

        $result = BooleanVerif::isFalse($boolean);

        $this->assertTrue($result);
    }
} 