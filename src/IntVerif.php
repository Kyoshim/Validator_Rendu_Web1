<?php

namespace Rendu\Verification;

class IntVerif
{
    const INTEGER_DEFAULT = 4;

    private static $defaultFirstNumber = 3;

    private static $defaultLastNumber = 20;

    /**
     * @param int $integer
     * @param null $number
     * @return bool
     */
    public static function equal($integer = self::INTEGER_DEFAULT, $number = null)
    {
        //($integer == $number) ? true : false;
        if ($integer == $number) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int $integer
     * @param null $number
     * @return bool
     */
    public static function higher($integer = self::INTEGER_DEFAULT, $number = null)
    {
        //($integer > $number) ? true : false;
        if ($integer > $number) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int $integer
     * @param null $number
     * @return bool
     */
    public static function lower($integer = self::INTEGER_DEFAULT, $number = null)
    {
        //($integer < $number) ? true : false;
        if ($integer < $number) {
            return true;
        } else {
            return false;
        }
    }

    public static function between($integer = self::INTEGER_DEFAULT, $firstNumber = null, $lastNumber = null)
    {
        $firstNumberNotNull = (null === $firstNumber) ? self::$defaultFirstNumber : ((int) $firstNumber);
        $lastNumberNotNull = (null === $lastNumber) ? self::$defaultLastNumber : ((int) $lastNumber);
        if (($integer >= $firstNumberNotNull) && ($integer <= $lastNumberNotNull)) {
            return true;
        } else {
            return false;
        }
    }

    public static function negative($integer = self::INTEGER_DEFAULT)
    {
        //($integer < 0) ? true : false;
        if ($integer < 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function positive($integer = self::INTEGER_DEFAULT)
    {
        //($integer > 0) ? true : false;
        if ($integer > 0) {
            return true;
        } else {
            return false;
        }
    }
}