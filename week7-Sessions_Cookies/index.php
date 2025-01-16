<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'sessions.php';  ?>
    <?php include 'cookies.php'; ?>
    <p>Deze pagina heb je al: <?php echo $visitCount?> keer bekeken voordat je de internet browser hebt afgesloten.</p>
    <p>In totaal heb je deze pagina al: <?php echo $totalVisits ?> keer bekeken.</p>
</body>
</html>