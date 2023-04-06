<?php

use Adopet\User;

require_once 'vendor/autoload.php';
require_once 'User.php';

$yago = new User('Yago',
    'yago@gmail.com',
          '1234',
                '',
            'teste'
);

$sql = "INSERT INTO USER
                    VALUES (
                            
                    )";