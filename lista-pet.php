<?php

use Alura\Pdo\Domain\Pet\Model\Pet;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query("SELECT * FROM pets;");
$petDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$petList = [];

foreach ($petDataList as $petData) {
    $petList[] = new Pet(
        $petData['id'],
        $petData['name'],
        $petData['species'],
        $petData['gender'],
        new DateTimeImmutable($petData['birth_date']),
        $petData['color'],
        $petData['description']
    );
}
var_dump($petList);
