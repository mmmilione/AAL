<?php 

    include('encryption.php');
    $_POST = json_decode(file_get_contents('php://input'), true);

    $isNew = true;
    $link = encrypt($_POST["link"]);
    $email = encrypt($_POST["email"]);

    $db = new SQLite3('./aal.db');

    $query = "SELECT * FROM airdrop WHERE email = '$email' OR link = '$link'";
    $res = $db->query($query);
    
    while ($row = $res->fetchArray()) {
        $isNew = false;
    }
    
    $data = (object) [
        'isNew' => $isNew
    ];

    echo json_encode($data);
?>