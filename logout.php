<?php
  // Rozpoczęcie sesji
  session_start();

  // Zerowanie danych sesji
  $_SESSION = array();

  // Niszczenie sesji
  session_destroy();

  // Przekierowanie na stronę logowania
  header("Location: /panel");
  exit();
?>
