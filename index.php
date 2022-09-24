<?php $lang = 'ENG'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antarctic Token - AAL - Acquire here the AAL Token at the lowest rates</title>
    <meta name="description" content="Airdrop, presale and roundsale of the Antarctic Token (AAL). Only here you can buy the token at discounted prices before its launch on PancakeSwap">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/airdrop.css">
</head>
<body>
    <div class="container">

        <?php include('components/nav.php'); ?>

        <div class="main">

            <?php 
                include('components/stageSelector.php'); 
                include('components/lateral.php'); 
            ?>
            
        </div>

        <?php include('components/footer.php'); ?>
        
    </div>

    <script type="module" src="/assets/js/main.js"></script>

    <?php include('components/scriptSelector.php'); ?>
    
</body>
</html>