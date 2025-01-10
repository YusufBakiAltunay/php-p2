<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST">
        <label for="name">Naam:</label><br>
         <input type="text" name="name" id="name"><br>  

        <label for="email">E-mail:</label><br>
        <input  type="email" name="email" id="email"><br>

        <label for="message">Bericht:</label><br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea><br><br>

        <button type="submit" name="submit-form">Verzend</button><br><br>
    </form>

    <?php
    if (isset($_POST['submit-form'])) {
        
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        

        if(empty($name)){
            echo "Naam is verplicht." . "<br>" . "<br>";
        } elseif (strlen($name) < 3){
            echo "De naam moet minimaal 3 tekens lang zijn." . "<br>" . "<br>";
        } else {
            echo "Je naam is: " . $name . "<br>" . "<br>";
        }

        if(empty($email)){
            echo  "E-mail is verplicht." . "<br>" . "<br>";
        } else {
            echo "Je e-mail is: " . $email . "<br>" . "<br>";
        }

        if(strlen($message) < 10){
            echo "Het bericht moet minimaal 10 tekens lang zijn." . "<br>" . "<br>";
        } else {
            echo "Je bericht is:" . $message . "<br>" . "<br>";
        }

        

    }
    ?>
</body>

</html>