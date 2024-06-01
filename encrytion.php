<?php


function enc_data($raw_data)
{
    $encrypt_method = 'AES-256-CBC';
    $secret_key = 'DiptanuBaidya@secret_key!';  
    $secret_iv = 'DiptanuBaidya@iv!';     

  
    $key = hash('sha256', $secret_key);
   
    $iv = substr(hash('sha256', $secret_iv), 0, 16);


    $enc_data = openssl_encrypt($raw_data, $encrypt_method, $key, 0, $iv);

    $enc_data = base64_encode($enc_data);
    
    return $enc_data;
}



function dec_data($enc_data)
{
    $encrypt_method = 'AES-256-CBC';
    $secret_key = 'DiptanuBaidya@secret_key!';  
    $secret_iv = 'DiptanuBaidya@iv!';           


    $key = hash('sha256', $secret_key);

    $iv = substr(hash('sha256', $secret_iv), 0, 16);


    $enc_data = base64_decode($enc_data);

    $dec_data = openssl_decrypt($enc_data, $encrypt_method, $key, 0, $iv);
    
    return $dec_data;
}





?>
