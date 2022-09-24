<?php 
    $db = new SQLite3('aal.db');
    $db->exec("CREATE TABLE airdrop(id INTEGER PRIMARY KEY, email TEXT, link TEXT, addr TEXT, created TIMESTAMP)");
    echo "AAL DB Created";
?>