<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  include 'navbar.php';   ?>
    
    <p>Welkom op de contact page</p>

    <form action="">

       <label for="firstName">Naam:</label><br>
       <input name="firstName" type="text"  id="name"><br>

       <label for="lastName">Achternaam:</label><br>
       <input name="lastName" type="text" id="surname"><br>

       <label for="messageArea">Bericht:</label><br>
       <input name="messageArea" type="text" id="message"><br><br>

       <button type="button">Indienen</button>



    </form>


    <?php  include 'footer.php';   ?>
</body>
</html>