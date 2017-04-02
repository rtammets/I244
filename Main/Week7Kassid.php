<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>w7 kassid</title>
    <style>
        div{
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php

include "Week7array.php";

foreach ($kassid as $kass){

echo "<div><p>".$kass['vanus']."-aastane ".$kass["nimi"]." on sündinud ".$kass["synniaasta"]." ja registreeritud ".$kass["reg_aasta"].". Ja tema kasukas on ".$kass["karva_varv"].".</p></div>";

}

?>

</body>
</html>