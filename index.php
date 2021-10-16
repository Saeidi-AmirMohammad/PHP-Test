<?php


var_dump($_COOKIE);

setcookie(
    'site_name',
    'saeidi',
    [
        'expires' => time() + 3600,
        'domain' => 'localhost',
        'path' => '/',
        'httponly' => true
    ]
)


?>

