<?Php

if (!isset($_COOKIE['total_visits'])) {
    $totalVisits = 1;
} else {
    $totalVisits = $_COOKIE['total_visits'] + 1;
}

setcookie('total_visits', $totalVisits, time() + 3600)


?>