<?php

if (isset($_POST["submit_form"])) {
    $name = $_POST["name"];
    $available = $_POST["available"];
    $stock = $_POST["stock"];
    ?>
    <h1><?= $name ?></h1>
    <p><?= $available ?></p>
    <p><?= $stock ?></p>


<?php
header("refresh:2;url=form_normal.php");
}



?>