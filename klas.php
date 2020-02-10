<?php
echo("Wie zit er in de klas?".PHP_EOL);

$namen = readline();
$thearray = array();

$klas = explode(" ", $namen);
array_push($thearray, $namen);
echo ("de studenten in de klas zijn: ".PHP_EOL);
foreach($klas as $namen => $naam){
    echo $naam.PHP_EOL;
}

?>