<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 24/11/2014
 * Time: 15:14
 */

namespace Rendu\Verification;


class BooleanVerif
{
    /**
     * @param bool $boolean
     * @return bool
     */
    public static function isTrue($boolean = true)
    {
        return true === $boolean;
    }

    /**
     * @param bool $boolean
     * @return bool
     */
    public static function isFalse($boolean = false)
    {
        return false === $boolean;
    }
}
