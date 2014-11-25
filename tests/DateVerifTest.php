<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 25/11/2014
 * Time: 22:29
 */

namespace Tests\Rendu\Verification;

use Rendu\Verification\DateVerif;

class DateVerifTest extends \PHPUnit_Framework_TestCase
{
    public function testIsYear()
    {
        $date = getdate();
        $year = $date['year'];

        $result = DateVerif::isYear($year);

        $this->assertTrue($result);
    }

    public function testIsYearFalse()
    {
        $year = 2000;

        $result = DateVerif::isYear($year);

        $this->assertFalse($result);
    }

    public function testIsMonth()
    {
        $date = getdate();
        $month = $date['month'];

        $result = DateVerif::isMonth($month);

        $this->assertTrue($result);
    }

    public function testIsMonthFalse()
    {
        $month = 15;

        $result = DateVerif::isMonth($month);

        $this->assertFalse($result);
    }

    public function testIsDay()
    {
        $date = getdate();
        $day = $date['mday'];

        $result = DateVerif::isDay($day);

        $this->assertTrue($result);
    }

    public function testIsDayFalse()
    {
        $day = 45;

        $result = DateVerif::isDay($day);

        $this->assertFalse($result);
    }
} 