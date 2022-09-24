<?php 

    include('encryption.php');
    $_POST = json_decode(file_get_contents('php://input'), true);

    $address = encrypt($_POST['address']);
    $email = encrypt($_POST['email']);
    $link = encrypt($_POST['link']);
    $timestamp =  $_SERVER['REQUEST_TIME'];

    $db = new SQLite3('aal.db');

    $db->exec("INSERT 
                INTO airdrop(email, link, addr, created) 
                VALUES('$email', '$link', '$address', $timestamp)");
    
    $data = (object) [
        'address' => $address,
        'email' => $email,
        'link' => $link,
        'timestamp' =>  $timestamp
    ];

    echo json_encode($data);

?>