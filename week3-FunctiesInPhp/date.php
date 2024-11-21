<?php 

$today = date("j F Y");
$day = date("l");
echo "a) Het is vandaag: $day $today.";

echo "<br>";

$dag = date("z");
echo "b) Vandaag is het de $dag e van het jaar.";

echo "<br>";

$vandaag = date("l");
$welkedag = date("w");
echo "c) $vandaag is de $welkedag e dag van de week.";

echo "<br>";

$month = date("F");
$daysInMonth = date("t");
echo "d) De maand $month heeft in totaal $daysInMonth dagen."


?>