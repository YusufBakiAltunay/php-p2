<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "<h1>Welkom, " . htmlspecialchars($_SESSION["username"]) . "!</h1>";
    echo "<a href='register.php'>Ga terug naar registeren</a>";
} else {
    echo "<h1>U moet zich registreren.</h1>";
}
?>