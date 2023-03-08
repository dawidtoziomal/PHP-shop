<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sklep internetowy z częściami komputerowymi - Procesory</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header class="header">
			<h1>Sklep internetowy z częściami komputerowymi</h1>
			<p>Zamów online i odbierz w sklepie!</p>
		</header>
		
		<nav class="menu">
			<ul>
				<li><a href="index.php">Strona główna</a></li>
				<li><a href="procesory.php">Procesory</a></li>
				<li><a href="pamieci.php">Pamięci</a></li>
				<li><a href="plyty.php">Płyty główne</a></li>
				<li><a href="dyski.php">Dyski</a></li>
				<li><a href="obudowy.php">Obudowy</a></li>
				<li><a href="koszyk.php">Koszyk</a></li>
			</ul>
		</nav>
		
		<main class="content">
			<h2>Dyski</h2>
			
			<div class="produkty">
				
				<div class="produkt">
				<?php
				$produkty = array(
					array("nazwa" => "Seagate 2TB FireCuda 530", "cena" => 979.00),
				);

				foreach ($produkty as $produkt) {
					echo "<li>" . $produkt["nazwa"] . " - " . $produkt["cena"] . " zł <a href='dodaj_do_koszyka.php?nazwa=" . $produkt["nazwa"] . "&cena=" . $produkt["cena"] . "'>Dodaj do koszyka</a></li>";
				}
			?>
				</div>
				<div class="produkt">
				<?php
				$produkty = array(
					array("nazwa" => "Samsung 2TB 970 EVO Plus", "cena" => 769.00)
				);

				foreach ($produkty as $produkt) {
					echo "<li>" . $produkt["nazwa"] . " - " . $produkt["cena"] . " zł <a href='dodaj_do_koszyka.php?nazwa=" . $produkt["nazwa"] . "&cena=" . $produkt["cena"] . "'>Dodaj do koszyka</a></li>";
				}
			?>
				</div>
			</div>
		</main>
		
		<footer class="footer">
			<p>Sklep internetowy z częściami komputerowymi - Dawid Masalski &copy; 2023</p>
		</footer>
	</body>
</html>
