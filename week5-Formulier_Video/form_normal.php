<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vliegtuigen</title>
</head>
<body>
    <form action="process_form.php" method="POST">
        <label for="name">Naam Vliegtuig</label>
        <input type="text" id="name" name="name">

        <label for="avaliable">Ja</label>
        <input type="radio" id="available" name="available" value="Ja">
        <label for="avaliable">Nee</label>
        <input type="radio" id="available" name="available" value="Nee">

        <label for="stock">Voorraad</label>
        <input type="number" id="stock" name="stock">

        <input type="submit" name="submit_form" value="Toevoegen">
    </form>

    
</body>
</html>