<?php
    $canproceed = true;
    if(!isset($_POST['userid'])){$canproceed = false;}

    if($canproceed)
    {
        $id = $_POST['userid'];


        $conn = mysqli_connect('localhost','root','','dane4');
    
        $q = mysqli_query($conn, "SELECT `imie`,`nazwisko`,`rok_urodzenia`,`opis`,`zdjecie`,hobby.nazwa FROM osoby JOIN hobby ON osoby.Hobby_id=hobby.id WHERE osoby.id='".$id."';");
        if($a = mysqli_fetch_array($q))
        {
            echo("<h2>".$id.". ".$a['imie']." ".$a['nazwisko']."</h2>");
            echo("<img src='".$a['zdjecie']."' alt='".$a['zdjecie']."'<br>");
            echo("<p>Rok urodzenia: ".$a['rok_urodzenia']."</p>");
            echo("<p>Opis: ".$a['opis']."</p>");
            echo("<p>Hobby: ".$a['nazwa']."</p>");
        }
        else
        {
            echo("Użytkownik o podanym id nie istnieje");
        }
    }

?>