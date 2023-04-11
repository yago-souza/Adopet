<?php


use Alura\Pdo\Domain\Model\User;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$user = new User(
    null,
    'Maria',
    'maria-alice@email.com',
'9876',
'Mae da aurora',
'teste3.jpg');

$sqlInsert = "INSERT INTO TBL_USER (NAME,
                                EMAIL,
                                PASSWORD,
                                ABOUT,
                                PROFILE_PICTURE)
                          VALUES (:name,
                                  :email,
                                  :password,
                                  :about,
                                  :profilePicture);";
## Prepara o retorno para evitar sql injection
$statement = $pdo->prepare($sqlInsert);
## Trata as strings para escapar caracteres especiais
$statement->bindValue(':name', $user->getName());
$statement->bindValue(':email', $user->getEmail());
$statement->bindValue(':password', $user->getPassword());
$statement->bindValue(':about', $user->getAbout());
$statement->bindValue(':profilePicture', $user->getProfilePicture());

if ($statement->execute()) {
    echo "Usuário incluido";
}
