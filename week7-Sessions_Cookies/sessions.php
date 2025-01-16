<?php

session_start();

if(!isset($_SESSION['page_visit_count'])){
    $_SESSION['page_visit_count'] = 0;
}

$_SESSION['page_visit_count']++;

$visitCount = $_SESSION['page_visit_count'];


?>