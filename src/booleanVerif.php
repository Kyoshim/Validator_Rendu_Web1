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
        if (true === $boolean) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param bool $boolean
     * @return bool
     */
    public static function isFalse($boolean = false)
    {
        if (false === $boolean) {
            return true;
        } else {
            return false;
        }
    }

} 