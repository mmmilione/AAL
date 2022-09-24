<?php 


function encrypt($simple_string) {

    $ciphering = "AES-128-CTR";
  
    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    
    // Non-NULL Initialization Vector for encryption
    $encryption_iv = 'YOUR_VECTOR'; //Customize this
    $encryption_key = 'YOUR_PASSWORD'; //Customize this

    // Use openssl_encrypt() function to encrypt the data
    $encryption = openssl_encrypt(
        $simple_string,
        $ciphering,
        $encryption_key, 
        $options, 
        $encryption_iv
    );

    return $encryption;
}

function decrypt($encryption, $decryption_key) {

    $ciphering = "AES-128-CTR";
  
    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    
    // Non-NULL Initialization Vector for encryption
    $decryption_iv = 'YOUR_VECTOR'; //Customize this

    // Use openssl_encrypt() function to encrypt the data
    $decryption=openssl_decrypt (
        $encryption, 
        $ciphering, 
        $decryption_key, 
        $options, 
        $decryption_iv
    );

    return $decryption;
}

?>
  