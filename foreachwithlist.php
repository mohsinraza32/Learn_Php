<?php
// $workers = [
//     [1,"Abid","software enginere","200k"],
//     [2,"waseem","Qa enginere","100k"],
//     [3,"shahid","data enginere","250k"],
//     [4,"saleem","graphic designer","80k"]
    
// ];

$workers = [
   [
"id" => 1,
"name" => "Mohsin",
"Designation" => "Software Enginere",
"Salary" => "1000k"
   ],
   [
"id" => 2,
"name" => "Zain",
"Designation" => "Qa Enginere",
"Salary" => "80k"
   ],
   [
"id" => 3,
"name" => "Zulfi",
"Designation" => "React Js developer",
"Salary" => "300k"
   ],
   [
"id" => 4,
"name" => "Rooh",
"Designation" => "Salesforce develoepr",
"Salary" => "400k"
   ]
];
echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
<tr>
 <th>Emp. id</th>
 <th>Name</th>
 <th>Designation</th>
 <th>Salary</th>
</tr>
";
foreach($workers as list("id" => $id,"name" => $name,"Designation" => $designation,"Salary" => $salaray)){
    echo "<tr> <td>$id</td> <td>$name</td> <td>$designation</td> <td>$salaray</td> </tr>";
}
echo "</table>";
?>