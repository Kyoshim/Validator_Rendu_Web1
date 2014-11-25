<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 25/11/2014
 * Time: 14:06
 */

namespace Tests\Rendu\Verification;

use Rendu\Verification\IntVerif;

class IntVerifTest extends \PHPUnit_Framework_TestCase
{
    public function testIntEqual()
    {
        $number = mt_rand(0, 100);
        $result = IntVerif::equal($number, $number);

        $this->assertTrue($result);
    }

    public function testIntEqualFalse()
    {
        $number = mt_rand(0, 100);
        $result = IntVerif::equal($number, $number+4);

        $this->assertFalse($result);
    }

    public function testIntHigher()
    {
        $numberHight = mt_rand(101, 200);
        $numberLow = mt_rand(0, 100);
        $result = IntVerif::higher($numberHight, $numberLow);

        $this->assertTrue($result);
    }

    public function testIntHigherFalse()
    {
        $numberHight = mt_rand(101, 200);
        $numberLow = mt_rand(0, 100);
        $result = IntVerif::higher($numberLow, $numberHight);

        $this->assertFalse($result);
    }

    public function testIntLower()
    {
        $numberHight = mt_rand(101, 200);
        $numberLow = mt_rand(0, 100);
        $result = IntVerif::lower($numberLow, $numberHight);

        $this->assertTrue($result);
    }

    public function testIntLowerFalse()
    {
        $numberHight = mt_rand(101, 200);
        $numberLow = mt_rand(0, 100);
        $result = IntVerif::lower($numberHight, $numberLow);

        $this->assertFalse($result);
    }

    public function testBetween()
    {
        $number1 = mt_rand(0, 20);
        $int = mt_rand(21, 29);
        $number2 = mt_rand(30, 40);

        $result = IntVerif::between($int, $number1, $number2);

        $this->assertTrue($result);
    }

    public function testBetweenFalse()
    {
        $number1 = mt_rand(0, 20);
        $int = mt_rand(41, 80);
        $number2 = mt_rand(30, 40);

        $result = IntVerif::between($int, $number1, $number2);

        $this->assertFalse($result);
    }

    public function testNegative()
    {
        $number = mt_rand(-20, 0);

        $result = IntVerif::negative($number);

        $this->assertTrue($result);
    }

    public function testNegativeFalse()
    {
        $number = mt_rand(1, 20);

        $result = IntVerif::negative($number);

        $this->assertFalse($result);
    }

    public function testPositive()
    {
        $number = mt_rand(0, 20);

        $result = IntVerif::positive($number);

        $this->assertTrue($result);
    }

    public function testPositiveFalse()
    {
        $number = mt_rand(-20, -1);

        $result = IntVerif::positive($number);

        $this->assertFalse($result);
    }

}