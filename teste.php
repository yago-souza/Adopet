<?php


use Alura\Pdo\Domain\Model\User;

require_once 'vendor/autoload.php';

$yago = new User(
    1,
    'Yago',
    'yago@gmail.com',
          '1234',
                '',
            'teste'
);
echo "Ok";