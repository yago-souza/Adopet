<?php

require_once 'vendor/autoload.php';
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infraestructure\Repository\PdoUserRepository;
use Alura\Pdo\Domain\User\Model\User;

$connection = ConnectionCreator::createConnection();
$teste = new PdoUserRepository($connection);

try {
    $user = new User(
        null,
        'teste',
        'teste@email.com',
        'teste',
        ' ',
        ' ');
    $teste->save($user);
} catch (\RuntimeException $e){
    echo $e->getMessage();
}

#var_dump($teste->allUsers());