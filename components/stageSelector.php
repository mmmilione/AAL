<?php 
    $now = time();

    //PROD
    if($now < 1663200000){ //Airdrop Starts
        include('waitForAirdrop.php');
    }else if($now >= 1663200000 && $now < 1668384000){ //Airdrop Duration
        include('airdrop.php'); 
    }else if($now >= 1668384000 && $now < 1678752000){ //Presale Duration
        include('presale.php');
    }else if($now >= 1678752000 && $now < 1683936000){ //Round Sale 1 Duration
        include('roundOne.php');
    }else if($now >= 1683936000 && $now < 1689120000){ //Round Sale 2 Duration
        include('roundTwo.php');
    }else{ //Market Convertibility
        include('go2Pancake.php'); 
    }
    
?>