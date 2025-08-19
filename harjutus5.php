<?php

  $nimi = "Kelli";
  $vanus = 32;
  $on_opilane = true;
  $lemmikvarvid = ["sinine", "valge", "roheline", "lilla"];

  echo "<p>Mina olen $nimi, $vanus aastat vana ja mu lemmikvärvid on " . implode(", ", $lemmikvarvid) . "..</p>"; //  PHP ei saa massiivi otse tekstis näidata, selleks on lihtsam kasutada implode() meetodit.

   ?>