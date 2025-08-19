<?php

  $blogi_pealkiri = "Nipinurk";
  $postituste_arv = 6;
  $on_sisselogitud = true;

  echo "<h1>$blogi_pealkiri</h1>";

  echo "<p>Blogis on $postituste_arv postitust.</p>";

  if ($on_sisselogitud) {
    echo "<p>Tere tulemast tagasi!</p>";
  } else {
    echo "<p>Sisu nägemiseks logi sisse.</p>";
  }
   ?>