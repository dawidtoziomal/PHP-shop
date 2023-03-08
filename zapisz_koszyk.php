<?php
session_start();

if(isset($_SESSION['koszyk'])) {
  $data = date('Y-m-d H:i:s');
  $file = fopen("koszyk.txt", "a") or die("Unable to open file!");
  $plik = fopen("koszyk.txt", "w");

  fwrite($file, "Data: " . $data . "\n");
  foreach ($_SESSION['koszyk'] as $produkt) {
    fwrite($file, $produkt['nazwa'] . " - " . $produkt['cena'] . " zł\n");
  }
  fwrite($file, "Łącznie: " . array_sum(array_column($_SESSION['koszyk'], 'cena')) . " zł\n\n");

  fclose($file);
  
  echo "Zawartość koszyka została zapisana do pliku 'koszyk.txt'";
} else {
  echo "Koszyk jest pusty!";
}
?>
