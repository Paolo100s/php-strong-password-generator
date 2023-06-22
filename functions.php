<?php
    $passwordLen = $_GET['passwordLen'];
    $symbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $symbolsLen = strlen($symbols) -1;
    $random_pass = [];
   
    for ($i=0; $i < $passwordLen; $i++) { 
        $n = rand(0, $symbolsLen);
        $random_pass [] = $symbols[$n];
    }
    print(implode($random_pass));
?>