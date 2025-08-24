<?php
// WordPress postituste haldamise süsteem - VIGANE VERSIOON!
$posts = [
    ['title' => 'PHP Algajale', 'status' => 'published', 'author' => 'Mari', 'views' => 1250, 'comments' => 15],
    ['title' => 'WordPress Turvalisus', 'status' => 'draft', 'author' => 'Jaan', 'views' => 0, 'comments' => 0],
    ['title' => 'CSS Grid Näited', 'status' => 'published', 'author' => 'Liis', 'views' => 890, 'comments' => 8],
    ['title' => 'JavaScript Tsüklid', 'status' => 'pending', 'author' => 'Peeter', 'views' => 0, 'comments' => 0],
    ['title' => 'React Komponendid', 'status' => 'published', 'author' => 'Anna', 'views' => 2100, 'comments' => 23],
    ['title' => 'Database Optimeerimine', 'status' => 'trash', 'author' => 'Mari', 'views' => 450, 'comments' => 5]
];

echo "<div class='post-manager'>";
echo "<h1>WordPress Postituste Haldus</h1>";

// PROBLEEM 1: Statistika arvutamine on poolik
$published_count = 0;
$draft_count = 0;
$pending_count = 0;
$trash_count = 0;
$total_views = 0;
$total_comments = 0;
// Lisa puuduvad loendajad: pending_count, trash_count, total_views, total_comments

foreach ($posts as $post) {
    if ($post['status'] == 'published') {
        $published_count++;
    } elseif ($post['status'] == 'draft') {  
        $draft_count++;
    } elseif ($post['status'] == 'pending'){
        $pending_count++;
    } elseif($post['status'] == 'trash'){
        $trash_count++;
    }
    
    // Lisa total_views ja total_comments arvutamine
    $total_views += $post['views'];
    $total_comments += $post['comments'];
}

echo "<div class='statistics'>";
echo "<h2>Statistika</h2>";
echo "<p>Avaldatud: $published_count</p>";
echo "<p>Mustandeid: $draft_count</p>";
// Lisa puuduvad statistika read
echo "<p>Ootel: $pending_count</p>";
echo "<p>Prügi: $trash_count</p>";
echo "<p>Vaatamisi kokku: $total_views</p>";
echo "<p>Kommentaarid: $total_comments</p>";
echo "</div>";

// PROBLEEM 2: Switch case on poolik ja vigane
echo "<div class='posts-list'>";
foreach ($posts as $post) {
    echo "<div class='post-item'>";
    echo "<h3>" . $post['title'] . "</h3>";
    echo "<p>Autor: " . $post['author'] . "</p>";
    
    switch ($post['status']) {
        case 'published':
            $badge_color = 'green';
            $status_text = 'Avaldatud';
            break;
        case 'draft':  
            $badge_color = 'orange';
            $status_text = 'Mustand';
            break;
        case 'pending':
            $badge_color = 'blue';
            $status_text = 'Ootab kinnitust';
            break;
        // Lisa puuduv case 'trash' jaoks
        case 'trash':
            $badge_color = 'black';
            $status_text = 'Prügi';
            break;
        default:
            $badge_color = 'gray';
            $status_text = 'Tundmatu';
            break;
    }
    
    echo "<span style='color: $badge_color; font-weight: bold;'>[$status_text]</span>";
    
    // PROBLEEM 3: Poolik tingimus-lause loogika
    if ($post['status'] == 'published') {
        echo "<p>Vaatamisi: " . $post['views'] . "</p>";
        echo "<p>Kommentaare: " . $post['comments'] . "</p>";
        
        // Lisa tingimus: kui views > 1000, näita "🔥 Populaarne!"
        // Lisa tingimus: kui comments > 10, näita "💬 Palju kommentaare!"
        // Lisa tingimus: kui views == 0 JA status on 'published', näita hoiatus

        if ($post['views'] > 1000) {
        echo "<p>🔥 Populaarne!</p>";
    }
    
    if ($post['comments'] > 10) {
        echo "<p>💬 Palju kommentaare!</p>";
    }
    
    if ($post['views'] == 0) {
        echo "<p>⚠️ Avaldatud, aga pole ühtegi vaatamist!</p>";
    }
        
    } elseif ($post['status'] == 'draft') {
        echo "<p>⚠️ Mustand - pole veel avaldatud</p>";
    }
    // Lisa elseif 'pending' jaoks
    elseif ($post['status'] == 'pending') {
        echo "<p>⚠️ Postitus on ootel.</p>";
    }
    // Lisa elseif 'trash' jaoks
     elseif ($post['status'] == 'trash') {
        echo "<p>🗑️ Postitus on prügikastis.</p>";
    }
    
    echo "</div>";
}
echo "</div>";

// PROBLEEM 4: Kõige populaarsema postituse leidmine on alustatud, aga lõpetamata
$most_popular_post = '';
$highest_views = 0;

// Kirjuta foreach tsükkel, mis leiab kõige rohkem vaatamisi saanud postituse
// Aga ainult nende seast, mis on 'published' staatuses!

foreach ($posts as $post) {
    // Kontrollime AINULT published postitusi
    if ($post['status'] == 'published') {
        
        // Kontrollime, kas sellel on rohkem vaatamisi kui praegusel liidril
        if ($post['views'] > $highest_views) {
            $highest_views = $post['views'];           // Uus rekord!
            $most_popular_post = $post['title'];       // Meeldejätmine
        }
    }
}

// PROBLEEM 5: Lisa lõpuks if lause, mis näitab tulemust
// Kui $most_popular_post pole tühi, kuva selle informatsioon

if (!empty($most_popular_post)) {
    echo "<div class='highlight'>";
    echo "<h2>🏆 Kõige populaarsem postitus: $most_popular_post</h2>";
    echo "<p>Vaatamisi: $highest_views</p>";
    echo "</div>";
} else {
    echo "<p>Avaldatud postitusi pole leitud.</p>";
}
?>