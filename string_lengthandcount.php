<?php
// $str = 'mohsin raza';
$str = 'Hey! my name is mohsin raza whats your name wow great.';

// echo strlen($str);
// echo str_word_count($str,0);//by default

// $arr = str_word_count($str,1);//it return array
// $arr = str_word_count($str,2);//it return aray with keys

echo substr_count($str,'name',9,40);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
?>