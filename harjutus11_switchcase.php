<?php
$page_template = 'home';  

switch ($page_template) {
    case 'home':
        echo "Avaleht template";
        $body_class = 'home-page';
        break;
    case 'single':
    echo "Üksiku postituse template";
    $body_class = 'single-post';
    break;
      case 'archive':
      echo "Arhiivi template";
      $body_class = 'archive-page';
      break;
    case 'search':
    echo "Otsingu template";
    $body_class = 'search-results';
    break;
      case 'default':
      echo "Vaikimisi template";
      $body_class = 'default-page';
      break;
}

echo "<br>Body class: " . $body_class;
?>