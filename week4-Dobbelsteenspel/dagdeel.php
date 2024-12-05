<?php
$tijd = date("G");

echo "<h2>Opdracht 1 if-else</h2>";
echo "Het is $tijd uur ";
echo "<br>";



if($tijd >= 6 && $tijd < 12){
    echo "Het is ochtend";
} elseif($tijd >= 12 && $tijd < 18){
    echo "Het is middag";
} elseif($tijd >= 18 && $tijd < 24){
    echo "Het is avond";
}else{
    echo "Het is nacht";
}

echo "<br>";

echo "<h2>Opdracht 2 Match()</h2>";
$dagdelen = match(true) {
    $tijd >= 6 && $tijd < 12 => "Het is ochtend",
    $tijd >= 12 && $tijd < 18 => "Het is middag",
    $tijd >= 18 && $tijd < 24 => "Het is avond",
    default => "Het is nacht",
};

echo "Het is $tijd uur ";
echo "<br>";
echo $dagdelen;



?>