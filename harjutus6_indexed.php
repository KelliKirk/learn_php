

<?php
 // Ülesanne: Loo indexed massiiv oma 5 lemmikroogaga. Kuva need kõik järjestatud nimekirjana HTML-is.
  $road = ["Kartulisalat", "Bataadifriikad", "Lihapirukas", "Kotlet", "Kartulipuder"];

  echo "<h3>Minu lemmikroad on:</h3>";
    for ($i = 0; $i < count($road); $i++) {
        echo ($i + 1) . ". " . $road[$i] . "<br>";
    }
?>
