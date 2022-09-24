<?php 
    include('encryption.php');
    include('help.php');

    //$db = new PDO('sqlite:../db/aal.db');
    $db = new SQLite3('../db/aal.db');
    $res = $db->query('SELECT * FROM airdrop');
    while ($row = $res->fetchArray()) {
        $email = decrypt($row['email'], $pw);
        $link = decrypt($row['link'], $pw);
        $addr = decrypt($row['addr'], $pw);
        $cutAddr = cutKey($addr, 4);
        echo "<div class='beneficiary'>
                User #{$row['id']}:<br>
                Email: <b>{$email}</b><br>
                Link: <b>{$link}</b><br>
                Indirizzo: <b>{$cutAddr}</b><br>
                Timestamp: <b>{$row['created']}</b>
            </div>";
    }
    
?>