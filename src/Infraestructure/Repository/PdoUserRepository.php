<?php

namespace Alura\Pdo\Infraestructure\Repository;

use Alura\Pdo\Domain\Repository\UserRepository;
use Alura\Pdo\Domain\User\Model\User;
use \PDO;

class PdoUserRepository implements UserRepository
{

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;}

    public function allUsers(): array
    {
        $sqlQuery = 'SELECT * FROM TBL_USER;';
        $statement = $this->connection->query($sqlQuery);

        return $this->hydrateUserList($statement);
    }

    public function userForId(int $id):array
    {
        $sqlQuery = "SELECT * FROM TBL_USER WHERE ID = $id;";
        $statement = $this->connection->query($sqlQuery);

        return $this->hydrateUserList($statement);
    }

    public function save(User $user): bool
    {
        if ($user->getId() === null) {
            return $this->insert($user);
        }
        
        return $this->update($user);
    }

    public function remove(User $user): bool
    {
        $statement = $this->connection->prepare('DELETE FROM TBL_USER WHERE ID = ?');
        $statement->bindValue(1,$user->getId(), PDO::PARAM_INT);

        return $statement->execute();
    }

    private function update(User $user): bool
    {
        $updateQuery = 'UPDATE TBL_USER SET
                                        NAME = :name,
                                        EMAIL = :email,
                                        PASSWORD = :password,
                                        ABOUT = :about,
                                        PROFILE_PICTURE = :profilePicture
                                        WHERE ID = :id;';
        $statement = $this->connection->prepare($updateQuery);

        return $statement->execute([
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword(),
            ':about' => $user->getAbout(),
            ':profilePicture' => $user->getProfilePicture(),
            ':id' => $user->getId()
        ]);
    }

    private function insert(User $user): bool
    {
        $insertQuery = 'INSERT INTO TBL_USERA (NAME,
                                EMAIL,
                                PASSWORD,
                                ABOUT,
                                PROFILE_PICTURE)
                          VALUES (:name,
                                  :email,
                                  :password,
                                  :about,
                                  :profilePicture);';

        $statement = $this->connection->prepare($insertQuery);

        $success = $statement->execute([
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword(),
            ':about' => $user->getAbout(),
            ':profilePicture' => $user->getProfilePicture()
        ]);

        if ($success) {
            $user->defineId($this->connection->lastInsertId());
        }

        return $success;
    }

    private function hydrateUserList(\PDOStatement $statement): array
    {
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

        return $userList;
    }
}