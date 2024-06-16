<?php
$workers = [
    [1,"Abid","software enginere","200k"],
    [2,"waseem","Qa enginere","100k"],
    [3,"shahid","data enginere","250k"],
    [4,"saleem","graphic designer","80k"]
    
];

// echo $workers[0][0] . " ";
// echo $workers[0][1] . " ";
// echo $workers[0][2] . " ";
// echo $workers[0][3] . " ";
// echo "<br>";
// echo $workers[1][0] . " ";
// echo $workers[1][1] . " ";
// echo $workers[1][2] . " ";
// echo $workers[1][3] . " ";
// echo "<br>";
// echo $workers[2][0] . " ";
// echo $workers[2][1] . " ";
// echo $workers[2][2] . " ";
// echo $workers[2][3] . " ";
// echo "<br>";
// echo $workers[3][0] . " ";
// echo $workers[3][1] . " ";
// echo $workers[3][2] . " ";
// echo $workers[3][3] . " ";

// for($row = 0; $row < 4; $row++){
//     for($col = 0; $col < 4; $col++){
//         echo $workers[$row][$col] . " ";
//     }
//     echo "<br>";
// }
echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";
echo "<tr>
    <th>Emp Id</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Salary</th>
    </tr>";
foreach($workers as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>$v2</td>";
    }
    echo "</tr>";
    echo "<br>";
}
echo "</table>";
// echo "<pre>";
// print_r($workers);
// echo "</pre>";
?>