<?php

require __DIR__.'/vendor/autoload.php';

//INT

//Verif si le nombre est égal à integer
echo \Rendu\Verification\IntVerif::equal(\Rendu\Verification\IntVerif::INTEGER_DEFAULT, 4);

//Verif si integer est supérieur au nombre
echo \Rendu\Verification\IntVerif::higher(\Rendu\Verification\IntVerif::INTEGER_DEFAULT, 3);

//Verif si integer est inférieur au nombre
echo \Rendu\Verification\IntVerif::lower(\Rendu\Verification\IntVerif::INTEGER_DEFAULT, 6);

//Verif si integer est compris entre le premier nombre et le second nombre
echo \Rendu\Verification\IntVerif::between(\Rendu\Verification\IntVerif::INTEGER_DEFAULT, 3, 35);

//Verif si integer est négatif
echo \Rendu\Verification\IntVerif::negative(-4);

//Verif si integer est positif
echo \Rendu\Verification\IntVerif::positive();

//STRING

//Verif si la taille de la chaine($stringLength) est égale à string($string)
echo \Rendu\Verification\StringVerif::sizeString(\Rendu\Verification\StringVerif::DEFAULT_STRING, 24);

//Verif si la taille de string($string) est supérieur au nombre de caractère($stringLength)
echo \Rendu\Verification\StringVerif::sizeSuperiorString(\Rendu\Verification\StringVerif::DEFAULT_STRING, 5);

//Verif si la taille de string($string) est inférieur au nombre de caractère($stringLength)
echo \Rendu\Verification\StringVerif::sizeInferiorString(\Rendu\Verification\StringVerif::DEFAULT_STRING, 40);

//Verif si la taille de string($string) est comprise entre $firstString et $lastString
echo \Rendu\Verification\StringVerif::sizeBetweenString(\Rendu\Verification\StringVerif::DEFAULT_STRING, 10, 30);

//Verif si il n'y a aucun espace en début et fin de chaine
echo \Rendu\Verification\StringVerif::noSpaceBeginEndString();

//Verif si il n'y a aucun espace dans la chaine
echo \Rendu\Verification\StringVerif::noSpaceString('Bonjour');

//Boolean

//Verif si $boolean returne true
echo \Rendu\Verification\BooleanVerif::isTrue();

//Verif si $boolean returne false
echo \Rendu\Verification\BooleanVerif::isFalse();


//Array

//Verif si le tableau est vide
echo \Rendu\Verification\ArrayVerif::emptyArray(array());

//Verif un nombre d'élément avec différents opérateurs
echo \Rendu\Verification\ArrayVerif::numberElementsOperator(\Rendu\Verification\ArrayVerif::OPERATOR_EQUAL, array('test'), 1);

//Verif Si $array est compris 2 éléments
echo \Rendu\Verification\ArrayVerif::numberElementsBetween(['test', 'try', 'lol'], 2, 12);

//Verif si la clé($key) est présente dans le tableau($array)
echo \Rendu\Verification\ArrayVerif::keyExists('test',array('test' => 'lol', 'salut', 'super'));

//Verif si la valeur($value) est présente dans le tableau($array)
echo \Rendu\Verification\ArrayVerif::valueExists('test', array('test', 'la', 'super'));

//Date

echo \Rendu\Verification\DateVerif::isYear();
echo \Rendu\Verification\DateVerif::isMonth();
echo \Rendu\Verification\DateVerif::isDay();
