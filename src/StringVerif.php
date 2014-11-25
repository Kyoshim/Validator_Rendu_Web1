<?php

namespace Rendu\Verification;


class StringVerif
{
    const DEFAULT_STRING        = 'Salut ! Comment vas-tu ?';
    const DEFAULT_STRING_LENGTH = 20;

    /**
     * @var int
     */
    private static $defaultFirstString = 15;

    /**
     * @var int
     */
    private static $defaultLastString  = 45;

    /**
     * @param string $string
     * @param int $stringLength
     * @return bool
     */
    public static function sizeString($string = self::DEFAULT_STRING, $stringLength = self::DEFAULT_STRING_LENGTH)
    {
        $stringLengthNumber = mb_strlen($string);

        if ($stringLengthNumber === $stringLength) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $stringLength
     * @return bool
     */
    public static function sizeSuperiorString($string = self::DEFAULT_STRING, $stringLength = self::DEFAULT_STRING_LENGTH)
    {
        $stringLengthNumber = mb_strlen($string);

        if ($stringLengthNumber > $stringLength) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $stringLength
     * @return bool
     */
    public static function sizeInferiorString($string = self::DEFAULT_STRING, $stringLength = self::DEFAULT_STRING_LENGTH)
    {
        $stringLengthNumber = mb_strlen($string);

        if ($stringLengthNumber < $stringLength) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param null $firstString
     * @param null $lastString
     * @return bool
     */
    public static function sizeBetweenString($string = self::DEFAULT_STRING, $firstString = null, $lastString = null)
    {
        $stringLengthNumber = mb_strlen($string);
        $firstStringNotNull = (null === $firstString) ? self::$defaultFirstString : ((int) $firstString);
        $lastStringNotNull  = (null === $lastString) ? self::$defaultLastString : ((int) $lastString);

        if (($stringLengthNumber >= $firstStringNotNull) && ($stringLengthNumber <= $lastStringNotNull)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function noSpaceBeginEndString($string = self::DEFAULT_STRING)
    {
        $stringLengthNumber = mb_strlen($string);
        $beginSpacePosi     = mb_strpos($string, ' ');
        $lastSpacePosi      = mb_strrpos($string, ' ');

        if (($beginSpacePosi === 0) && (($lastSpacePosi + 1) === $stringLengthNumber)) {
            return true;
        } else {
            return false;
        }

    }

    /**
     * @param string $string
     * @return bool
     */
    public static function noSpaceString($string = self::DEFAULT_STRING)
    {
        $spaceExist = mb_substr_count($string, ' ');

        if (0 === $spaceExist) {
            return true;
        } else {
            return false;
        }
    }
}
