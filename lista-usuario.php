<?php

use Alura\Pdo\Domain\Model\User;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query("SELECT * FROM TBL_USER;");
$userDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$userList = [];

foreach ($userDataList as $userData) {
    $userList[] = new User(
        $userData['ID'],
        $userData['NAME'],
        $userData['EMAIL'],
        $userData['PASSWORD'],
        $userData['ABOUT'],
        $userData['PROFILE_PICTURE']
    );
}
var_dump($userList);
