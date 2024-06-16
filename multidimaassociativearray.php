<?php
$marks = [
    "Mohsin"=>[
        "physics"=>80,
        "computer"=>90,
        "Math"=>79
    ],
    "zain"=>[
        "physics"=>70,
        "computer"=>85,
        "Math"=>89
    ],
    "zulfi"=>[
        "physics"=>60,
        "computer"=>55,
        "Math"=>67
    ]
];
echo "<table border='2px'cellpadding='10px' cellspacing='0px'
<tr>
  <th>Student Name</th>
  <th>Physics</th>
  <th>Computer</th>
  <th>Math</th>
</tr>
";

foreach($marks as $key => $v1){
    echo "<tr>";
      echo "<td>$key</td>";

    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
       echo "</tr>";
}
echo "</table>";

// echo "<pre>";
// print_r($marks);
// echo "</pre>";

?>