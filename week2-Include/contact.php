<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  include 'navbar.php';   ?>
    
    <h1>Welkom op de contact page</h1>

    <form action="">

       <label for="enaam">Naam:</label><br>
       <input name="enaam" type="text"  id="fname"><br>

       <label for="anaam">Achternaam:</label><br>
       <input name="anaam" type="text" id="sname"><br>

       <label for="bericht">Bericht:</label><br>
       <input name="bericht" type="text" id="message"><br><br>

       <button>Indienen</button>



    </form>


    <?php  include 'footer.php';   ?>
</body>
</html>