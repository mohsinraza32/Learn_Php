<?php
$str = 'Hey! today is second day of eid-ul-adha';

// $find = ['today','is','second'];
// $replace = ['yesterday','was','first'];

// echo str_replace('today','yesterday',$str);
// echo str_replace($find,$replace ,$str);
// echo substr_replace($str,'earth',5,10);
echo strtr($str,'o','l');
?>