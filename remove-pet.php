<?php

use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$idPet = 1; // Coloque o ID pra remover

$sqlDelete = "DELETE FROM pets WHERE id = :idPet;";

$statement = $pdo->prepare($sqlDelete);
$statement->bindValue(':idPet', $idPet, PDO::PARAM_INT);

if ($statement->execute()) {
    echo "Pet removido com sucesso!";
}
