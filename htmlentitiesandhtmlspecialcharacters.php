<?php
 //$str = "Hello 'How' are <b>you</b> mohsin!";
//$str = '<a href="http://www.Google.com">Google visit here</a>';

//echo $str . "<br><br>";

// echo htmlentities($str);
// echo htmlentities($str,ENT_QUOTES);

//echo htmlentities($str,ENT_NOQUOTES);

//echo htmlspecialchars($str,ENT_NOQUOTES);//same as htmlentities

//echo htmlspecialchars($str,ENT_QUOTES);

//$htmlen = htmlentities($str, ENT_QUOTES);

//echo $htmlen;

//echo html_entity_decode($htmlen);

echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "<pre>";
?>