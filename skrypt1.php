<?php
    $conn = mysqli_connect('localhost','root','','dane4');

    $q = mysqli_query($conn, "SELECT `id`,`imie`,`nazwisko`,`rok_urodzenia` FROM osoby LIMIT 30;");

    while($a = mysqli_fetch_array($q))
    {
        echo($a['id'] . ". " . $a['imie'] . " " . $a['nazwisko'] . " " . (date("Y") - $a['rok_urodzenia']) . " lat");
        echo('<br>');
    }
    mysqli_close($conn);

?>