<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 25/11/2014
 * Time: 14:07
 */

namespace Tests\Rendu\Verification;

use Rendu\Verification\StringVerif;

class StringVerifTest extends \PHPUnit_Framework_TestCase
{
    public function testSizeString()
    {
        $string = 'test';
        $lenght = mb_strlen($string);

        $result = StringVerif::sizeString($string, $lenght);

        $this->assertTrue($result);
    }

    public function testSizeStringFalse()
    {
        $string = 'test';
        $lenght = mb_strlen($string)+1;

        $result = StringVerif::sizeString($string, $lenght);

        $this->assertFalse($result);
    }

    public function testSizeSuperiorString()
    {
        $string = 'test';
        $lenght = mb_strlen($string)-1;

        $result = StringVerif::sizeSuperiorString($string, $lenght);

        $this->assertTrue($result);
    }

    public function testSizeSuperiorStringFalse()
    {
        $string = 'test';
        $lenght = mb_strlen($string)+1;

        $result = StringVerif::sizeSuperiorString($string, $lenght);

        $this->assertFalse($result);
    }

    public function testSizeInferiorString()
    {
        $string = 'test';
        $lenght = mb_strlen($string)+1;

        $result = StringVerif::sizeInferiorString($string, $lenght);

        $this->assertTrue($result);
    }

    public function testSizeInferiorStringFalse()
    {
        $string = 'test';
        $lenght = mb_strlen($string)-1;

        $result = StringVerif::sizeInferiorString($string, $lenght);

        $this->assertFalse($result);
    }

    public function testSizeBetweenString()
    {
        $string = 'test';
        $firstNumberStr = mb_strlen($string) - mt_rand(1, 30);
        $lastNumberStr = mb_strlen($string) + mt_rand(1, 30);

        $result = StringVerif::sizeBetweenString($string, $firstNumberStr, $lastNumberStr);

        $this->assertTrue($result);
    }

    public function testSizeBetweenStringFalse()
    {
        $string = 'test';
        $firstNumberStr = mb_strlen($string) + mt_rand(1, 30);
        $lastNumberStr = mb_strlen($string) - mt_rand(1, 30);

        $result = StringVerif::sizeBetweenString($string, $firstNumberStr, $lastNumberStr);

        $this->assertFalse($result);
    }

    public function testNoSpaceBeginEndString()
    {
        $string = ' test ';

        $result = StringVerif::noSpaceBeginEndString($string);

        $this->assertTrue($result);
    }

    public function testNoSpaceBeginEndStringFalse()
    {
        $string = 'test';

        $result = StringVerif::noSpaceBeginEndString($string);

        $this->assertFalse($result);
    }

    public function testNoSpaceString()
    {
        $string = 'test';

        $result = StringVerif::noSpaceString($string);

        $this->assertTrue($result);
    }

    public function testNoSpaceStringFalse()
    {
        $string = ' test';

        $result = StringVerif::noSpaceString($string);

        $this->assertFalse($result);
    }

} 