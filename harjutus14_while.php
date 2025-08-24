<?php
// Loo while tsükkel, mis kuvab kategooriaid numbriga, alustades 1-st ja lõpetades siis, kui number on suurem kui 6.

$current_category = 1;
$last_category = 6;

echo "<div class='category-list'>";
  while($current_category <= $last_category) {
    echo "<div class='category'>Kategooria $current_category</div>";
    $current_category++;
  }

  echo "</div>"
  ?>