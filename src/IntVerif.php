<?php

namespace Rendu\Verification;

class IntVerif
{
    const INTEGER_DEFAULT = 4;

    /**
     * @var int
     */
    private static $defaultFirstNumber = 3;

    /**
     * @var int
     */
    private static $defaultLastNumber = 20;

    /**
     * @param int $integer
     * @param null $number
     * @return bool
     */
    public static function equal($integer = self::INTEGER_DEFAULT, $number = null)
    {
        return $integer === $number;
    }

    /**
     * @param int $integer
     * @param null $number
     * @return bool
     */
    public static function higher($integer = self::INTEGER_DEFAULT, $number = null)
    {
        return $integer > $number;
    }

    /**
     * @param int $integer
     * @param null $number
     * @return bool
     */
    public static function lower($integer = self::INTEGER_DEFAULT, $number = null)
    {
        return $integer < $number;
    }

    /**
     * @param int $integer
     * @param null $firstNumber
     * @param null $lastNumber
     * @return bool
     */
    public static function between($integer = self::INTEGER_DEFAULT, $firstNumber = null, $lastNumber = null)
    {
        $firstNumberNotNull = (null === $firstNumber) ? self::$defaultFirstNumber : ((int) $firstNumber);
        $lastNumberNotNull  = (null === $lastNumber) ? self::$defaultLastNumber : ((int) $lastNumber);

        return ($integer >= $firstNumberNotNull) && ($integer <= $lastNumberNotNull);
    }

    /**
     * @param int $integer
     * @return bool
     */
    public static function negative($integer = self::INTEGER_DEFAULT)
    {
        return $integer <= 0;
    }

    /**
     * @param int $integer
     * @return bool
     */
    public static function positive($integer = self::INTEGER_DEFAULT)
    {
        return $integer >= 0;
    }
}
