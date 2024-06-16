<?php
// $friend = ["salman","ali","waseem","ashraf","zahid","asif"];

//  $bestFriend = array_slice($friend,2,3,true);
// $bestFriend = array_slice($friend,-3,3);



$bestFriend = ["30" => "salman","20" => "ali","50" => "waseem","60" => "ashraf","70" => "saleem"];

$newFriend = array_slice($bestFriend,2,3,true);
echo "<pre>";
print_r($newFriend);
echo "</pre>";

?>