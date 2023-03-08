<!DOCTYPE html>
<html>
<head>
	<title>Koszyk</title>
	<link rel="stylesheet" type="text/css" href="koszyk.css">
</head>
<body>

<div class="container">

	<?php
	session_start();

	$suma = 0;
	$ilosc = 0;

	if (isset($_SESSION["koszyk"])) {
		foreach ($_SESSION["koszyk"] as $indeks => $produkt) {
			$suma += $produkt["cena"];
			$ilosc++;
			echo "<div class='produkt'>";
			echo "<div class='nazwa'>" . $produkt["nazwa"] . "</div>";
			echo "<div class='cena'>" . $produkt["cena"] . " zł</div>";
			echo "<form action='usuwanie.php' method='post'>";
			echo "<input type='hidden' name='indeks' value='$indeks'>";
			echo "<input type='submit' value='Usuń'>";
			echo "</form>";
			echo "</div>";
		}
	}

	if ($ilosc == 0) {
		echo "<div class='pusty'>Twój koszyk jest pusty.</div>";
	} else {
		echo "<div class='naglowek'>Koszyk</div>";
		echo "<div class='produkty'>";
		foreach ($_SESSION["koszyk"] as $produkt) {
			echo "<div class='produkt'>";
			echo "<div class='nazwa'>" . $produkt["nazwa"] . "</div>";
			echo "<div class='cena'>" . $produkt["cena"] . " zł</div>";
			echo "</div>";
		}
		echo "</div>";
		echo "<div class='suma'>Łącznie: " . $suma . " zł</div>";
		echo "<form action='zapisz_koszyk.php' method='post'>";
		echo "<input type='hidden' name='zawartosc_koszyka' value='" . serialize($_SESSION["koszyk"]) . "'>";
		echo "<input type='submit' value='Zapisz koszyk'>";
		echo "</form>";
    
	}
	?>
  

</div>
<div class="back">
  <a href='index.php'>Powrót do strony głównej</a>
</div>

<div class="footer">
	<p>© 2023 Sklep internetowy z częściami komputerowymi - Dawid Masalski</p>
</div>

</body>
</html>
