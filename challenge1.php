<?php
// Harjutus: Koduloomade register
// Täida puuduvad kohad ja paranda vead

// 1. MUUTUJATE DEFINEERIMINE
// Loo muutujad oma koduloomade kohta
$pet_name = "Levitt";
$pet_age = 4;  // Lisa oma looma vanus (number)
$is_vaccinated = true;  // true või false
$weight_kg = 5.7;  // Kaal kommaga (nt 4.5)

// 2. STRINGIDE TÖÖTLUS
// Loo täielik lause oma looma kohta
$description = "Minu loom nimega " . $pet_name . " on " . $pet_age . " aastat vana.";

// Loo vaktsiinikontrolli tekst
$vaccine_status = "Vaktsineeritud: " . ($is_vaccinated ? "Jah" : "Ei");

// 3. INDEXED ARRAY (tavamassiv)
// Loo massiv oma looma lemmiktoitudega (vähemalt 4 elementi)
$favorite_foods = ["arbuus", "sink", "märgtoit", "juust"];  // Lisa toidud siin

// 4. ASSOCIATIVE ARRAY (assotsiaatiivmassiv)
// Loo detailne info oma looma kohta
$pet_info = [
    "nimi" => $pet_name,
    "vanus" => $pet_age,
    "kaal" => $weight_kg,
    "tõug" => "kodukass",  // Lisa oma looma tõug
    "värv" => "must-valge",  // Lisa oma looma värv
    "vaktsineeritud" => $is_vaccinated
];

// 5. ANDMETE VÄLJASTAMINE
echo "<h2>Minu koduloom</h2>";
echo "<p>" . $description . "</p>";
echo "<p>" . $vaccine_status . "</p>";

// Kuva looma põhiinfo (kasuta associative array'd)
echo "<h3>Põhiandmed:</h3>";
echo "<ul>";
echo "<li>Nimi: " . $pet_info["nimi"] . "</li>";
echo "<li>Vanus: " . $pet_info["vanus"] . " aastat</li>";
echo "<li>Kaal: " . $pet_info["kaal"] . " kg</li>";
echo "<li>Tõug: " . $pet_info["tõug"] . "</li>";
echo "<li>Värv: " . $pet_info["värv"] . "</li>";
echo "<li>Vaktsineerimisstatus: " . ($pet_info["vaktsineeritud"] ? "Jah" : "Ei") . "</li>";
echo "</ul>";

// Kuva lemmiktoitude list
echo "<h3>Lemmiktoitide nimekiri:</h3>";
echo "<ul>";
// Kuva esimene toit
echo "<li>" . $favorite_foods[0] . "</li>";
// Kuva teine toit
echo "<li>" . $favorite_foods[1] . "</li>";
// Lisa veel kaks toitu (indeksid 2 ja 3)
echo "<li>" . $favorite_foods[2] . "</li>";
echo "<li>" . $favorite_foods[3] . "</li>";


echo "</ul>";

// 6. LISAÜLESANDED
// a) Arvuta looma vanus kuudes (korruta 12-ga)
$age_in_months = $pet_age * 12;

// b) Kontrolli, kas loom on "suur" (üle 10 kg)
$is_big_pet = ($weight_kg > 10);  // kasuta boolean võrdlust

// Loo uus string, mis ühendab looma nime ja tõu
$name_and_breed = $pet_info["nimi"] . " - " . $pet_info["tõug"];

// Kuva tulemused
echo "<h3>Lisainfo:</h3>";
echo "<p>Vanus kuudes: " . $age_in_months . "</p>";
echo "<p>Suur loom: " . ($is_big_pet ? "Jah" : "Ei") . "</p>";
echo "<p>Nimi ja tõug: " . $name_and_breed . "</p>";

// 7. LISAINFO
// Näide teise looma kohta
$second_pet = [
    "nimi" => "Bella",
    "vanus" => 4,
    "tõug" => "Poolpikakarvaline triibik"
];

echo "<h3>Teine loom:</h3>";
echo "<p>" . $second_pet["nimi"] . " (" . $second_pet["tõug"] . "), vanus: " . $second_pet["vanus"] . " aastat</p>";

?>