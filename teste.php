<?php

require_once 'vendor/autoload.php';
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infraestructure\Repository\PdoUserRepository;
use Alura\Pdo\Domain\User\Model\User;

$connection = ConnectionCreator::createConnection();
$teste = new PdoUserRepository($connection);

var_dump($teste->allUsers());