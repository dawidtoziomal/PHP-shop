<!DOCTYPE html>
<html>
<head>
	<title>Sklep internetowy z częściami komputerowymi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Sklep internetowy z częściami komputerowymi</h1>
		<p>Witaj w naszym sklepie! Wybierz interesującą Cię kategorię.</p>
	</div>
	<div class="menu">
		<ul>
			<li><a href="index.php">Strona główna</a></li>
			<li><a href="procesory.php">Procesory</a></li>
			<li><a href="pamieci.php">Pamięci</a></li>
			<li><a href="plyty.php">Płyty główne</a></li>
			<li><a href="dyski.php">Dyski</a></li>
			<li><a href="obudowy.php">Obudowy</a></li>
			<li><a href="koszyk.php">Koszyk</a></li>
		</ul>
	</div>
	<div class="content">
		<h2>Polecane</h2>
		<ul>
			<?php
				$produkty = array(
					array("nazwa" => "Intel Core i5-11600K", "cena" => 1299.99),
					array("nazwa" => "AMD Ryzen 9 5900X", "cena" => 2399.99),
					array("nazwa" => "ASUS ROG MAXIMUS Z690 EXTREME GLACIAL DDR5", "cena" => 11399.99),
				);

				foreach ($produkty as $produkt) {
					echo "<li>" . $produkt["nazwa"] . " - " . $produkt["cena"] . " zł <a href='dodaj_do_koszyka.php?nazwa=" . $produkt["nazwa"] . "&cena=" . $produkt["cena"] . "'>Dodaj do koszyka</a></li>";
				}
			?>
		</ul>
	</div>
	<div class="footer">
		<p>&copy; 2023 Sklep internetowy z częściami komputerowymi - Dawid Masalski</p>
	</div>
</body>
</html>

