<?php
  $comments_allowed = true;
  $comment_count = 20;

  if ($comment_count > 10) {
    echo "Palju kommentaare!";
  } elseif ($comment_count <= 10) {
    echo "Mõned kommentaarid";
  } elseif ($comment_count == 0) {
    echo "Pole kommentaare";
  } else {
    echo "Kommentaarid on keelatud.";
  }
  ?>