<?php
  // Loo massiiv 3 raamatuga (pealkiri, autor, aasta, hind). Kuva need HTML formaadis.

  $raamatud = [[
    "Pealkiri" => "Videvik",
    "Autor" => "Stephenie Meyer",
    "Aasta" => 2008,
    "Hind" => "30 €"
  ],
    [
    "Pealkiri" => "Kaka ja kevad",
    "Autor" => "Andrus Kivirähk",
    "Aasta" => 2009,
    "Hind" => "15 €"
    ],
    [
    "Pealkiri" => "Värin",
    "Autor" => "Maggie Stiefvater",
    "Aasta" => 2009,
    "Hind" => "20 €"
    ]];

    echo "<p>" . $raamatud[0]["Pealkiri"] . "</p>";
    echo "<p>" . $raamatud[0]["Autor"]  . "</p>";
    echo "<p>" . $raamatud[0]["Aasta"]  . "</p>";
    echo "<p>" . $raamatud[0]["Hind"]  . "</p>";

    echo "<p>" . $raamatud[1]["Pealkiri"] . "</p>";
    echo "<p>" . $raamatud[1]["Autor"]  . "</p>";
    echo "<p>" . $raamatud[1]["Aasta"] . "</p>";
    echo "<p>" . $raamatud[1]["Hind"]  . "</p>";

    echo "<p>" . $raamatud[2]["Pealkiri"] . "</p>";
    echo "<p>" . $raamatud[2]["Autor"] . "</p>";
    echo "<p>" . $raamatud[2]["Aasta"] . "</p>";
    echo "<p>" . $raamatud[2]["Hind"]  . "</p>";
    ?>




