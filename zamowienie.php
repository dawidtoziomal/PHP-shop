<?php
	session_start();
    $suma = 0;
    $ilosc = 0;
    $tekst = "";
    
    if (isset($_SESSION["koszyk"])) {
        foreach ($_SESSION["koszyk"] as $produkt) {
            $suma += $produkt["cena"];
            $ilosc++;
            $tekst .= $produkt["nazwa"] . " - " . $produkt["cena"] . " zł\n";
        }
    }
    
    $tekst .= "Łącznie: " . $suma . " zł";
    
    file_put_contents("zamowienie.txt", $tekst);
    
    session_unset();
    session_destroy();?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Sklep internetowy z częściami komputerowymi</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Sklep internetowy z częściami komputerowymi</h1>
            <p>Dziękujemy za złożenie zamówienia!</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Strona główna</a></li>
            </ul>
        </div>
        <div class="content">
            <p>Twoje zamówienie:</p>
            <ul>
                <?php
                    foreach ($_SESSION["koszyk"] as $produkt) {
                        echo "<li>" . $produkt["nazwa"] . " - " . $produkt["cena"] . " zł</li>";
                    }
                ?>
            </ul>
            <p>Łącznie: <?php echo $suma; ?> zł</p>
        </div>
        <div class="footer">
            <p>&copy; 2023 Sklep internetowy z częściami komputerowymi</p>
        </div>
    </body>
    </html>
    
