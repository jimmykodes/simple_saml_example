<?php

$config = array(

    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),

    'sql-auth' => array(
        'sqlauth:SQL',
        'dsn' => 'mysql:host=db;port=3306;dbname=saml',
        'username' => 'user',
        'password' => 'password',
        'query' => 'SELECT username, email FROM users WHERE username = :username AND password = SHA2(CONCAT((SELECT salt FROM users WHERE username = :username), :password),256);',
    ),
);