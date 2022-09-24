<?php 

    //PROD
    if($now < 1663200000){
        echo '<script type="module" src="/assets/js/wait.js"></script>';
    }else if($now >= 1663200000 && $now < 1668384000){
        echo '<script type="module" src="/assets/js/airdrop.js"></script>';
    }else if($now >= 1668384000 && $now < 1689120000){
        echo '<script type="module" src="/assets/js/sale.js"></script>';
    }else{
        echo null;
    }
    
?>