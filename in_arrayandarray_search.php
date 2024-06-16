<?php
//$colors = array("red","green","blue","purple",77,"pink","yellow","purple");

// echo in_array('purple',$colors);

// if(in_array('mehrron',$colors)){
//     echo "Find succesfull";
// }else{
//     echo "Cant find";
// }

// if(in_array('77',$colors,True)){
//     echo "Find succesfull";
// }else{
//     echo "Cant find";
// }

//  $food = array(
//      "Fast food" => array("zinger burger","44","beef burger","fries"),
//      "Desi food" => array("chicken karai","mutton karai","seekh")
//  );

//  if(in_array(array("zinger burger",44,"beef burger","fries"),$food,true)){
//     echo "array found";
//  }else{
//     echo "array not found";
//  }

$employe = array(
    "zain" => 23,
    "zulfi" => 26,
    "shan" => 24
);

echo array_search(23,$employe);
?>