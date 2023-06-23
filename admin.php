<!DOCTYPE html>
<html>
<head>
  <title>Panel administracyjny</title>
  <style>
    /* Style CSS */
  </style>
</head>
<body>

<a href="/logout">
  <button class="btn">
  Wyloguj sie
  </button>
</a>

<a href="/home">
  <button class="btn1">
  Strona Glowna
  </button>
</a>

  <?php
    // Sprawdź, czy użytkownik jest zalogowany
    session_start();
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
      // Jeśli użytkownik nie jest zalogowany, wyświetl formularz logowania
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sprawdź, czy formularz został przesłany
        $password = $_POST['password'];
        
        // Sprawdź, czy hasło jest poprawne
        if ($password === 'adm123321') {
          $_SESSION['logged_in'] = true;
          echo '<script>window.location.href = "/panel";</script>';
          exit();
        } else {
          echo '<p class="error-message">Nieprawidłowe hasło. Spróbuj ponownie.</p>';
        }
      }
      
      echo '<h1>Panel administracyjny - Logowanie</h1>';
      echo '<form method="POST" action="">';
      echo '<label>Haslo:</label>';
      echo '<input type="password" name="password"><br>';
      echo '<input type="submit" value="Zaloguj">';
      echo '</form>';
      
      exit();
    }
  ?>

  <center><h1>Panel administracyjny</h1></center>
  
  <?php
    // Zarządzanie treścią strony
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Sprawdź, czy formularz został przesłany
      $content1 = $_POST['content1'];
      $content2 = $_POST['content2'];
      $content3 = $_POST['content3'];
	  $content4 = $_POST['content4'];
      $content5 = $_POST['content5'];
      $content6 = $_POST['content6'];
	  $content7 = $_POST['content7'];
      $content8 = $_POST['content8'];
	  $content9 = $_POST['content9'];
      $content10 = $_POST['content10'];
	  $content11 = $_POST['content11'];
      
      // Zapisz treść do pliku tekstowego
      file_put_contents('content.cntfile', $content1.PHP_EOL.$content2.PHP_EOL.$content3.PHP_EOL.$content4.PHP_EOL.$content5.PHP_EOL.$content6.PHP_EOL.$content7.PHP_EOL.$content8.PHP_EOL.$content9.PHP_EOL.$content10.PHP_EOL.$content11);
      
    echo "<p class='success-message'>Tresc zostala zaktualizowana.</p>";
    }
    
    // Wyświetlanie formularza do zarządzania treścią
    $content = file_get_contents('content.cntfile');
    $contentArray = explode(PHP_EOL, $content);
    $content1 = isset($contentArray[0]) ? $contentArray[0] : '';
    $content2 = isset($contentArray[1]) ? $contentArray[1] : '';
    $content3 = isset($contentArray[2]) ? $contentArray[2] : '';
	$content4 = isset($contentArray[3]) ? $contentArray[3] : '';
    $content5 = isset($contentArray[4]) ? $contentArray[4] : '';
    $content6 = isset($contentArray[5]) ? $contentArray[5] : '';
	$content7 = isset($contentArray[6]) ? $contentArray[6] : '';
    $content8 = isset($contentArray[7]) ? $contentArray[7] : '';
	$content9 = isset($contentArray[8]) ? $contentArray[8] : '';
    $content10 = isset($contentArray[9]) ? $contentArray[9] : '';
	$content11 = isset($contentArray[10]) ? $contentArray[10] : '';
    
	
    echo '<form method="POST" action="">';
    echo '<label for="content1"><h1>Miejsce 1:</label></h1><br>';
    echo '<textarea id="content1" name="content1" rows="8" cols="40">' . $content1 . '</textarea><br><br>';
    echo '<label for="content2"><h1>Miejsce 2:</label></h1><br>';
    echo '<textarea id="content2" name="content2" rows="8" cols="40">' . $content2 . '</textarea><br><br>';
    echo '<label for="content3"><h1>Miejsce 3:</label></h1><br>';
    echo '<textarea id="content3" name="content3" rows="8" cols="40">' . $content3 . '</textarea><br><br>';
    echo "<h1 class='erg'>------------------------------------------------------</h1>";
	echo '<label for="content2"><h1>Tytul 1:</label></h1><br>';
	echo '<textarea id="content4" name="content4" rows="8" cols="40">' . $content4 . '</textarea><br><br>';
    echo '<label for="content2"><h1>Tytul 2:</label></h1><br>';
    echo '<textarea id="content2" name="content5" rows="8" cols="40">' . $content5 . '</textarea><br><br>';
    echo '<label for="content3"><h1>Tytul 3:</label></h1><br>';
    echo '<textarea id="content6" name="content6" rows="8" cols="40">' . $content6 . '</textarea><br><br>';
	echo '<label for="content3"><h1>Kontakt Tytuł:</label></h1><br>';
    echo '<textarea id="content8" name="content8" rows="8" cols="40">' . $content8 . '</textarea><br><br>';
	echo '<label for="content3"><h1>Kontakt Tresc:</label></h1><br>';
    echo '<textarea id="content6" name="content7" rows="8" cols="40">' . $content7 . '</textarea><br><br>';
	echo '<label for="content3"><h1>O nas tytul:</label></h1><br>';
    echo '<textarea id="content9" name="content9" rows="8" cols="40">' . $content9 . '</textarea><br><br>';
	echo '<label for="content9"><h1>O nas Tresc:</label></h1><br>';
    echo '<textarea id="content10" name="content10" rows="8" cols="40">' . $content10 . '</textarea><br><br>';
	echo '<label for="content9"><h1>Naglowek:</label></h1><br>';
    echo '<textarea id="content11" name="content11" rows="8" cols="40">' . $content11 . '</textarea><br><br>';
    echo '<input type="submit" value="Zapisz">';
    echo '</form>';
  ?>
</body>
</html>
