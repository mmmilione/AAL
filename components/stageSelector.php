<?php 
    $now = time();

    //PROD
    if($now < 1663200000){
        include('waitForAirdrop.php');
    }else if($now >= 1663200000 && $now < 1668384000){
        include('airdrop.php'); 
    }else if($now >= 1668384000 && $now < 1678752000){
        include('presale.php');
    }else if($now >= 1678752000 && $now < 1683936000){
        include('roundOne.php');
    }else if($now >= 1683936000 && $now < 1689120000){
        include('roundTwo.php');
    }else{
        include('go2Pancake.php'); 
    }
    
?>