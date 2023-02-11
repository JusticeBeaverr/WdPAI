<?php

namespace repository;
use Exception;
use PDO;
use User;

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';
class UserRepository extends Repository
{

    public function getUser(string $username): ?User
    {
        $stmt = $this->database->connect()->prepare(
            'SELECT * FROM public.users  WHERE username = :username'
        );
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            throw new Exception("User not found");
        }



        return new User(
            $user['username'],
            $user['email'],
            $user['password']

        );

    }
}