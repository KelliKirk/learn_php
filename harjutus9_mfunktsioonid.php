<?php
  // Loo massiiv hinnetega (0-100), sorteeri need, leia keskmine hinne ja kuva statistika.

  $hinded = range(0,100);

  // Sorteerimine kahanevas järjekorras

  rsort($hinded);

  // Leiame keskmise

  $keskmine = array_sum($hinded) / count($hinded);

  // Statistika

echo "Kõik hinded: <br>" . implode(", ", $hinded) . "<br><br>";
echo "Kõige suurem hinne: " . max($hinded) . "<br>";
echo "Kõige väiksem hinne: " . min($hinded) . "<br>";
echo "Keskmine hinne: " . round($keskmine, 2) . "<br>";
echo "Hindeid kokku: " . count($hinded) . "<br>";
?>