
<?php
// Loo massiiv WordPress kasutaja rollidega ja nende õigustega, seejärel kuva need foreach tsükliga
  $user_roles = [
    'subscriber' => 'Saab sisu lugeda',
    'contributor' => 'Saab postitusi kirjutada',
    'author' => 'Saab oma postitusi avaldada',
    'editor' => 'Saab kõiki postitusi toimetada',
    'administrator' => 'Täielik juurdepääs'
];

echo "<nav><ul>"; 
foreach ($user_roles as $role => $description) {
    echo "<li><a href='/$description>$role</a></li>";
}

echo "</ul></nav>";
?>