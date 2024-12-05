<?php

$randomGetal = rand(1, 6);

echo $randomGetal;
echo "<br>";

if( $randomGetal == 6 ){
    echo "U bent gewonnen een speciale prijs.";
} elseif ( $randomGetal == 4 || $randomGetal == 5) {
    echo "U bent gewonnen.";
} else{
    echo "U heeft verloren";
}

?>