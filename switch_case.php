<?php
// $weekday = 8;

// switch($weekday){
//     case 1:
//         echo "Today is Monday";
//         break;
//     case 2:
//     echo "Today is Tuesday";
//     break;
//     case 3:
//     echo "Today is Wednesday";
//     break;
//     case 4:
//     echo "Today is Thursday";
//     break;
//     case 5:
//         echo "Today is Friday";
//         break;
//         case 6:
//             echo "Today is Saturday";
//             break;
//             case 7:
//                 echo "Today is Sunday";
//                 break;
//                 default:
//                 echo "Please Enter Valid Weekday";
//                   


//}

$age = 31;

switch(true){
    case ($age >= 18 && $age <= 30):
     echo "You are eligible";   
     break;
     case ($age <= 17 && $age <= 31):
     echo "You are not eligble";
     break; 
     default:
     echo "Please Enter Valid Age";     
    
}
?>