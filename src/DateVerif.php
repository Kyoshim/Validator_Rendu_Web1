<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 25/11/2014
 * Time: 22:04
 */

namespace Rendu\Verification;


class DateVerif
{
    /**
     * @var int
     */
    private static $defaultYear = 2014;

    /**
     * @var int
     */
    private static $defaultMounth = 11;

    /**
     * @var int
     */
    private static $defaultDay = 26;

    /**
     * @param null $year
     * @return bool
     */
    public static function isYear($year = null)
    {
        (null === $year) ? $year = self::$defaultYear : ((int) $year);

        $date     = getdate();
        $yearDate = $date['year'];

        if ($year == $yearDate) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param null $month
     * @return bool
     */
    public static function isMonth($month = null)
    {
        (null === $month) ? $month = self::$defaultMounth : ((int) $month);

        $date      = getdate();
        $monthDate = $date['month'];

        if ($month == $monthDate) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param null $day
     * @return bool
     */
    public static function isDay($day = null)
    {
        (null === $day) ? $day = self::$defaultDay : ((int) $day);

        $date    = getdate();
        $dayDate = $date['mday'];

        if ($day == $dayDate) {
            return true;
        } else {
            return false;
        }
    }
}
