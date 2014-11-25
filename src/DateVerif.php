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

        return $year === $yearDate;
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

        return $month === $monthDate;
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

        return $day === $dayDate;
    }
}
