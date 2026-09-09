<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <form action="podstrona.php" method="POST" id="form">
    <h2>Wprowadź ściśle tajną wiadomość</h2>
    <input type="text" name="tekst" id="text" maxlength="11"><br>   
    <div id="radio">
    <input type="radio" name="Szyfrowanie" value="1"> Podstawiony
    <input type="radio" name="Szyfrowanie"  value="2"> Przestawiony
    <input type="radio" name="Szyfrowanie"  value="3"> Cezara
    <input type="radio" name="Szyfrowanie"  value="4"> Ułamkowy
    </div><br>
    <input type="submit" id="submit">
    </form>
</body>
</html>