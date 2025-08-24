<?php
// Loo for tsükkel, mis genereerib lehe numeratsiooni (pagination) 1-st 10-ni.

$total_pages = 10;
$page = 1;

// WordPress pagination

echo "<div class='pagination'>";

for ($page = 1; $page <= $total_pages; $page++) {
    if ($page == $current_page) {
        echo "<span class='current'>$page</span> "; // Praegune leht
    } else {
        echo "<a href='?page=$page'>$page</a> "; // Link teisele lehele
    }
}

echo "</div>";
?>
