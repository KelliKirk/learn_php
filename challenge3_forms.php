<?php
// Vigane kontakti vorm - paranda mind!

function kuva_kontakti_vorm() {
    if (isset($_POST['saada'])) {
        $nimi = sanitize_text_field($_POST['nimi']); // andmete puhastamine turvalisuse tagamiseks
        $email = sanitize_email($_POST['email']);
        $telefon = sanitize_text_field($_POST['telefon']);
        $sõnum = sanitize_textarea_field($_POST['sõnum']);
        
        // Kontrolli kas email on olemas
      // Kogume kõik vead kokku
$vead = array();
    }

// Kontrollime iga välja
if (empty($nimi)) {
    $vead[] = "Nimi on kohustuslik!";
}

if (empty($email)) {
    $vead[] = "Email on kohustuslik!";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $vead[] = "Email on vales formaadis!";
}

if (empty($sõnum)) {
    $vead[] = "Sõnum on kohustuslik!";
}

// Kas vigu on?
if (empty($vead)) {
    // Kõik korras - saada email!
    // 1. Admin emaili saamine WordPressi seadetest
    $admin_email = get_option('admin_email');
    
    // 2. Emaili teema
    $teema = 'Uus kontakti sõnum saidilt ' . get_bloginfo('name');
    
    // 3. Emaili sisu - kõik andmed kokku
    $sisu = "Nimi: " . $nimi . "\n";
    $sisu .= "Email: " . $email . "\n";
    $sisu .= "Telefon: " . $telefon . "\n\n";
    $sisu .= "Sõnum:\n" . $sõnum;
    
    // 4. Emaili saatmine
    if (wp_mail($admin_email, $teema, $sisu)) {
        echo "Aitäh, sõnum edukalt saadetud!";
    } else {
        echo "Viga! Emaili saatmine ebaõnnestus.";
    }
    
} else {
    // On vigu - näita neid
    foreach ($vead as $viga) {
        echo $viga . "<br>";
    }
}
        

?>
    
    <form method="post">
         <?php wp_nonce_field('kontakt_tegevus', 'kontakt_nonce'); // WordPress genereerib salajase koodi ja väljastab <input type="hidden" name="kontakt_nonce" value="abc123xyz">?> 
        <input type="text" name="nimi" placeholder="Nimi">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="telefon" placeholder="Telefon">
        <textarea name="sõnum" placeholder="Sõnum"></textarea>
        <input type="submit" name="saada" value="Saada">
    </form>
    <?php
    
}

add_shortcode('kontakt', 'kuva_kontakti_vorm')
?>