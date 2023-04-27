<?php

use Alura\Pdo\Domain\Pet\Model\Pet;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$pet = new Pet(
    null, 
    'Neguinha',
    'dog',
    'male',
    '20210301',
    'Black',
    'Neguinha ela é boazinha e pode ser a sua amiguinha'
);

$sqlInsert = "INSERT INTO pets (name, species, gender, birth_date, color, description)
                          VALUES (:name, :species, :gender, :birthDate, :color, :description);";

$statement = $pdo->prepare($sqlInsert);

$statement->bindValue(':name', $pet->getName());
$statement->bindValue(':species', $pet->getSpecies());
$statement->bindValue(':gender', $pet->getGender());
$statement->bindValue(':birthDate', $pet->getBirthDate()->format('Y-m-d'));
$statement->bindValue(':color', $pet->getColor());
$statement->bindValue(':description', $pet->getDescription());

if ($statement->execute()) {
    echo "Pet incluído";
}
