<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $gender = $_POST["gender"];
    $country = $_POST["country"];

    $errors = [];

   
    if (empty($username) || empty($email) || empty($password) || empty($gender) || empty($country)) {
        $errors[] = "Alle velden moeten ingevuld zijn.";
    }

    
    if (strlen($username) < 3 || strlen($username) > 15) {
        $errors[] = "De gebruikersnaam moet tussen de 3 en 15 tekens zijn.";
    }

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Het e-mailadres is ongeldig.";
    }

   
    if (strlen($password) < 6) {
        $errors[] = "Het wachtwoord moet minimaal 6 tekens zijn.";
    }

    
    if (!isset($gender)) {
        $errors[] = "Selecteer een geslacht.";
    }

    
    if ($country == "") {
        $errors[] = "Selecteer een land.";
    }

    if (empty($errors)) {
        $_SESSION["username"] = $username;
        header("Location: index.php");
    }
}
?>