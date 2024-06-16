<?php
$per = 110;

if($per >= 80 && $per <= 100){
    echo "You are in merit";
}elseif($per >= 60 && $per <= 80){
    echo "You are in 1st Division";
}elseif($per >= 45 && $per <= 60){
    echo "You are in 2nd division";
}elseif($per >= 33 && $per <= 45){
    echo "You are in 3rd division";
}elseif($per < 33){
    echo "You are fail";
}else{
    echo "Please enter Valid percentage";
}
?>