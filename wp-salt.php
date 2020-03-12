<?php
if( php_sapi_name() !== 'cli' ) {
    die("Meant to be run from command line");
}

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

if (is_readable(__DIR__ . '/.env')) {
    $env = new Dotenv();
    $env->load(__DIR__ . '/.env');
}

function generate_salt() {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_[]{}<>~`+=,.;:/?|';
    
    $salt = '';
    for ( $i = 0; $i < 64; $i++ ) {
        $salt .= substr( $chars, rand( 0, strlen( $chars ) - 1 ), 1 );
    }

    return $salt;
}

foreach ( array( 'AUTH', 'SECURE_AUTH', 'LOGGED_IN', 'NONCE', 'SECRET' ) as $first ) {
    foreach ( array( 'KEY', 'SALT' ) as $second ) {
        if (!$_ENV["{$first}_{$second}"]) {
            file_put_contents('.env', "{$first}_{$second}='" . generate_salt() . "'\n", FILE_APPEND);
        }
    }
}
