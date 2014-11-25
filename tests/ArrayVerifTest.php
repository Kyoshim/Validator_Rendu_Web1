<?php

namespace Tests\Rendu\Verification;

use Rendu\Verification\ArrayVerif;

class ArrayVerifTest extends \PHPUnit_Framework_TestCase
{
    public function testEmptyArray()
    {
        $array = array();

        $result = ArrayVerif::emptyArray($array);

        $this->assertTrue($result);
    }

    public function testEmptyArrayFalse()
    {
        $array = array('test');

        $result = ArrayVerif::emptyArray($array);

        $this->assertFalse($result);
    }

    public function testNumberElementsOperatorEqual()
    {
        $array = array('test');
        $numberElement = 1;

        $result = ArrayVerif::numberElementsOperator(ArrayVerif::OPERATOR_EQUAL, $array, $numberElement);

        $this->assertTrue($result);
    }

    public function testNumberElementsOperatorSuperior()
    {
        $array = array('test');
        $numberElement = 2;

        $result = ArrayVerif::numberElementsOperator(ArrayVerif::OPERATOR_SUPERIOR, $array, $numberElement);

        $this->assertTrue($result);
    }

    public function testNumberElementsOperatorSuperiorEqual()
    {
        $array = array('test', 'salut', 'voiture');
        $numberElement = 4;

        $result = ArrayVerif::numberElementsOperator(ArrayVerif::OPERATOR_SUPERIOR_EQUAL, $array, $numberElement);

        $this->assertTrue($result);
    }

    public function testNumberElementsOperatorInferior()
    {
        $array = array('test', 'salut', 'voiture');
        $numberElement = 0;

        $result = ArrayVerif::numberElementsOperator(ArrayVerif::OPERATOR_INFERIOR, $array, $numberElement);

        $this->assertTrue($result);
    }

    public function testNumberElementsOperatorInferiorEqual()
    {
        $array = $array = array('test', 'salut', 'voiture');
        $numberElement = 3;

        $result = ArrayVerif::numberElementsOperator(ArrayVerif::OPERATOR_INFERIOR_EQUAL, $array, $numberElement);

        $this->assertTrue($result);
    }

    public function testNumberElementsBetween()
    {
        $array = array('test', 'pomme', 'bateau', 'voiture');
        $firstNumberArray = mt_rand(1, 3);
        $lastNumberArray =  mt_rand(6, 12);

        $result = ArrayVerif::numberElementsBetween($array, $firstNumberArray, $lastNumberArray);

        $this->assertTrue($result);
    }

    public function testNumberElementsBetweenFalse()
    {
        $array = array('test', 'pomme', 'bateau', 'voiture');
        $firstNumberArray = mt_rand(6, 12);
        $lastNumberArray =  mt_rand(1, 3);

        $result = ArrayVerif::numberElementsBetween($array, $firstNumberArray, $lastNumberArray);

        $this->assertFalse($result);
    }

    public function testKeyExists()
    {
        $array = array('test', 'pomme', 'bateau', 'voiture');
        $key = mt_rand(0, 3);

        $result = ArrayVerif::keyExists($key, $array);

        $this->assertTrue($result);
    }

    public function testKeyExistsFalse()
    {
        $array = array('test', 'pomme', 'bateau', 'voiture');
        $key = mt_rand(4, 9);

        $result = ArrayVerif::keyExists($key, $array);

        $this->assertFalse($result);
    }

    public function testValueExists()
    {
        $array = array(1, 2, 3, 4);
        $value = mt_rand(1, 4);

        $result = ArrayVerif::valueExists($value, $array);

        $this->assertTrue($result);
    }

    public function testValueExistsFalse()
    {
        $array = array(1, 2, 3, 4);
        $value = mt_rand(5, 10);

        $result = ArrayVerif::valueExists($value, $array);

        $this->assertFalse($result);
    }

}