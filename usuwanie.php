<?php
session_start();

if (isset($_POST["indeks"])) {
    $indeks = $_POST["indeks"];
    if (isset($_SESSION["koszyk"][$indeks])) {
        unset($_SESSION["koszyk"][$indeks]);
    }
}

header("Location: koszyk.php");
exit;
?>
