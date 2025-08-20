<?php
 // Loo associative massiiv enda kohta (nimi, vanus, linn, amet, hobi). Kuva see HTML tabelina.

 $andmed = [
    "Nimi" => "Kelli",
    "Vanus" =>  32,
    "Linn" => "Tartu",
    "Amet" => "Õpilane",
    "Hobi" => "Programmeerimine"
 ];

 echo "<table border = 1>";
 echo "<tr><td>Nimi</td><td>" . $andmed["Nimi"] . "</td></tr>";
 echo "<tr><td>Vanus</td><td>" . $andmed["Vanus"] . "</td></tr>";
 echo "<tr><td>Linn</td><td>" . $andmed["Linn"] . "</td></tr>";
 echo "<tr><td>Amet</td><td>" . $andmed["Amet"] . "</td></tr>";
 echo "<tr><td>Hobi</td><td>" . $andmed["Hobi"] . "</td></tr>";
 echo "</table>";
?>