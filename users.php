<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css" type="text/css">
</head>
<body>
    <div id="banner">
        <h3>Portal Społecznościowy - panel administratora</h3>
    </div>
    <div id="lewy">
        <h4>Użytkownicy</h4>
        <?php include "skrypt1.php" ?>
        <a href="settings.html">Inne ustawienia</a>
    </div>
    <div id="prawy">
        <h4>Podaj id użytkownika</h4>
        <form action="" method="post">
            <input type="number" name="userid">
            <input type="submit" class="submitbutton" value="ZOBACZ">
        </form>
        <hr>
        <?php include "skrypt2.php" ?>
    </div>
    <div id="stopka">
        Stronę wykonał: 01234567890
    </div>
</body>
</html>