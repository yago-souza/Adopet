<?php

namespace Alura\Pdo\Domain\Repository;

use Alura\Pdo\Domain\User\Model\User;

interface UserRepository
{
    public function allUsers(): array;
    public function save(User $user): bool;
    public function remove(User $user): bool;
}