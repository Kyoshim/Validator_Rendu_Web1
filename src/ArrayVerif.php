<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 24/11/2014
 * Time: 15:27
 */

namespace Rendu\Verification;

class ArrayVerif
{
    const DEFAULT_KEY = 3;
    const DEFAULT_VALUE = 'test';
    const DEFAULT_NUMBER_ELEMENT = 3;

    const OPERATOR_EQUAL = 1;
    const OPERATOR_SUPERIOR = 2;
    const OPERATOR_SUPERIOR_EQUAL = 3;
    const OPERATOR_INFERIOR = 4;
    const OPERATOR_INFERIOR_EQUAL = 5;

    /**
     * @var int
     */
    private static $defaultNumberFirstArray = 3;

    /**
     * @var int
     */
    private static $defaultNumberLastArray = 8;

    /**
     * @var array
     */
    private static $defaultArray = array('salut');

    /**
     * @param null $array
     * @return bool
     */
    public static function emptyArray($array = null)
    {
        (null === $array) ? self::$defaultArray : ((array) $array);

        if ($array === array()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int $operator
     * @param null $array
     * @param int $numberElement
     * @return bool|string
     * @throws \Exception
     */
    public static function numberElementsOperator($operator = self::OPERATOR_EQUAL, $array = null, $numberElement = self::DEFAULT_NUMBER_ELEMENT)
    {
        (null === $array) ? $array = self::$defaultArray : ((array) $array);

        if (false === in_array($operator, [
                self::OPERATOR_EQUAL,
                self::OPERATOR_SUPERIOR,
                self::OPERATOR_SUPERIOR_EQUAL,
                self::OPERATOR_INFERIOR,
                self::OPERATOR_INFERIOR_EQUAL,
            ]))
            throw new \Exception('Bad operator!');

        $numberElementArray = count($array);
        $operatorSelected = '';

        switch ($operator) {
            case self::OPERATOR_EQUAL:
                $operatorSelected = ($numberElement === $numberElementArray) ? true : false;
                break;
            case self::OPERATOR_SUPERIOR:
                $operatorSelected = ($numberElement > $numberElementArray) ? true : false;
                break;
            case self::OPERATOR_SUPERIOR_EQUAL:
                $operatorSelected = ($numberElement >= $numberElementArray) ? true : false;
                break;
            case self::OPERATOR_INFERIOR:
                $operatorSelected = ($numberElement < $numberElementArray) ? true : false;
                break;
            case self::OPERATOR_INFERIOR_EQUAL:
                $operatorSelected = ($numberElement <= $numberElementArray) ? true : false;
                break;
        }
        return $operatorSelected;
    }

    /**
     * @param null $array
     * @param null $firstArray
     * @param null $lastArray
     * @return bool
     */
    public static function numberElementsBetween($array = null, $firstArray = null, $lastArray = null)
    {
        (null === $array) ? $array = self::$defaultArray : ((array) $array);
        (null === $firstArray) ? $firstArray = self::$defaultNumberFirstArray : ((int) $firstArray);
        (null === $lastArray) ? $lastArray = self::$defaultNumberLastArray : ((int) $lastArray);

        $numberOfElement = count($array);
        if (($numberOfElement >= $firstArray) && ($numberOfElement <= $lastArray)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int $key
     * @param null $array
     * @return bool
     */
    public static function keyExists($key = self::DEFAULT_KEY, $array = null)
    {
        (null === $array) ? $array = self::$defaultArray : ((array) $array);

        if (array_key_exists($key, $array)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $value
     * @param null $array
     * @return bool
     */
    public static function valueExists($value = self::DEFAULT_VALUE, $array = null)
    {
        (null === $array) ? self::$defaultArray : ((array) $array);

        if (in_array($value, $array)) {
            return true;
        } else {
            return false;
        }
    }
}
