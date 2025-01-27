<?php
$x="Hello World!";
echo strtoupper($x);//uppercase
echo "\n";
$x="Hello World!";
echo strtolower($x);//lowercase
echo "\n";
$x="Hello World!";
echo str_replace("World","Dolly",$x);//replace string
echo "\n";
$x="Hello World!";
echo strrev($x);//reverse string
echo "\n";
$x="Hello";
$y= "World";
$z= $x ." ". $y;         //concatination with space string 
echo $z;
echo "\n";
$x= "Hello";
$y= "World";
$z= "$x$y";         //concatination string by using double quote
echo $z;
echo "\n";
?>