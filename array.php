<?php
// $student = array("Mohsin","zulfi",40,"zain","Rooh",50.5);
// $student = ["Mohsin","zulfi",40,"zain","Rooh",50.5];

// $student[0] = "Mohsin";
// $student[1] = "zulfi";
// $student[2] = 40;
// $student[3] = "zain";
// $student[4] = "rooh";
// $student[5] = 50.5;

// echo $student[0]."<br>";
// echo $student[1]."<br>";
// echo $student[2]."<br>";
// echo $student[3]."<br>";
// echo $student[4]."<br>";
// echo $student[5]."<br>";

// echo "<pre>";
// print_r($student);
// echo "</pre>";

 $student = ["Mohsin","zulfi",40,"zain","Rooh",50.5];
  echo "<ul>";
 for($i = 0; $i < 6; $i++){
    echo "<li> $student[$i] </li>";
 }
 echo "</ul>";

?>