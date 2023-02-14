<?php

namespace repository;
use Exception;
use PDO;
use User;

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';
class UserRepository extends Repository
{
    private $id;

    public function getUser(string $username): ?User
    {
        $stmt = $this->database->connect()->prepare(
            'SELECT * FROM public.users u LEFT JOIN user_details ud
                   ON u.id_user_details = ud.id WHERE username = :username'
        );
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            throw new Exception("User not found");
        }
        $this->id = $user['id'];
        $_SESSION['admin'] = $user['admin'];
        return new User(
            $user['username'],
            $user['email'],
            $user['password'],
            $user['name'],
            $user['lastname']
        );
    }
    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare(
            'WITH identity AS (INSERT INTO user_details (name, lastname, email) VALUES (?, ?, ?) RETURNING id) 
            INSERT INTO users (username,password, id_user_details) VALUES (?, ?, (SELECT id FROM identity))'
        );
        $stmt->execute([
            $user->getName(),
            $user->getLastname(),
            $user->getEmail(),
            $user->getUsername(),
            $user->getPassword(),


        ]);
    }

    public function updateUser(User $user)
    {
        $stmt = $this->database->connect()->prepare(
            'WITH identity AS (UPDATE users SET username = ?, password = ? WHERE id = ? RETURNING id_user_details)
                UPDATE user_details SET name = ?, lastname= ?, email = ? WHERE id = (SELECT id_user_details FROM identity);'
        );
        $stmt->execute([
            $user->getUsername(),
            $user->getPassword(),
            $_SESSION['user_id'],
            $user->getName(),
            $user->getLastname(),
            $user->getEmail()
        ]);
    }

    public function getId()
    {
        return $this->id;
    }
}