<?php

$A = true;
$B = false;
$C = true;
$D = false;

// var_dump($A && $B); // False
// var_dump($A && $C); // true
// var_dump($A || $B); // true
// var_dump($D || $B); // False
// var_dump(!$D); // true
// var_dump(!$C); // false
// var_dump(!$A && $A || $C ); // true
// var_dump(!$A And !$A); 
var_dump($A || $B);
var_dump($A xor $B);
var_dump($A xor $A);
var_dump($A || $A);