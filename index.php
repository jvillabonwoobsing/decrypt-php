<?php

require __DIR__ . '/vendor/autoload.php';

$key = '{Encryption_Key}';

$decrypt = new \Illuminate\Encryption\Encrypter(base64_decode($key), 'AES-256-CBC');
$value = $decrypt->decrypt('{Encrypter_String}');

echo $value;