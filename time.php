<!DOCTYPE html>
<html lang="es">

<head>
    <title>Página por defecto</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="Página por defecto" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
</head>

<body>
<h1>Time</h1>
<h5>Prod</h5>
<?php
    echo "Airdrop Start: " . date("d M y H:i:s", 1663200000);
    echo "<br>";
    echo "Airdrop Finishes: " . date("d M y H:i:s", 1668384000);
    echo "<br>";
    echo "Presale Finishes: " . date("d M y H:i:s", 1678752000);
    echo "<br>";
    echo "Round One Finishes: " . date("d M y H:i:s", 1683936000);
    echo "<br>";
    echo "Round Two Finishes: " . date("d M y H:i:s", 1689120000);
?>

<script src="/assets/js/time.js"></script>
</body>

</html>