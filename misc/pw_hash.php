<?php
$password = 'yOuR-pAs5w0rd-hERe';
$strong_result = false;
$salt = openssl_random_pseudo_bytes(12, $strong_result);
echo "The salt is ...<br>";
var_dump($salt); echo "<br>";
var_dump($strong_result); echo "<br>";
$keyLength = 40;
$iterations = 80000;
$generated_key = openssl_pbkdf2($password, $salt, $keyLength, $iterations, 'sha512WithRSAEncryption');
echo "Generated key is ...<br>";
echo bin2hex($generated_key)."<br>";

