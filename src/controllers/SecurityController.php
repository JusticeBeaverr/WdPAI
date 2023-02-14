<?php

use repository\UserRepository;

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class SecurityController extends AppController{
    private UserRepository $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }
    public function login()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username) || empty($password)) {
            return $this->render('login', ['messages' => ['Please fill in all fields']]);
        }

        try {
            $user = $this->userRepository->getUser($username);
        } catch (Exception $error) {
            return $this->render('login', ["messages" => [$error->getMessage()]]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $_SESSION['user_id'] = $this->userRepository->getId();
        $_SESSION['user_details'] = $user->getName() . ' ' . $user->getLastname();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/events");
    }

    public function logout()
    {
        session_destroy();
        return $this->render('login', ['messages' => ['You have been logged out successfully']]);
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];

        if (empty($username) || empty($email) || empty($password) || empty($confirmedPassword) || empty($name) || empty($lastname)) {
            return $this->render('register', ['messages' => ['Please fill in all fields']]);
        }

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }



        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        if (password_needs_rehash($hashedPassword, PASSWORD_BCRYPT))
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $user = new User($username, $email, $hashedPassword, $name, $lastname);


        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been successfully registered!']]);
    }

    public function settings()
    {
        if (!$this->isPost()) {
            return $this->render('settings');
        }

        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];


        if ($password !== $confirmedPassword) {
            return $this->render('settings');
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        if (password_needs_rehash($hashedPassword, PASSWORD_BCRYPT))
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $user = new User($username,$email, $hashedPassword, $name, $lastname);

        $this->userRepository->updateUser($user);
        $_SESSION['user_details'] = $name . ' ' . $lastname;

        return $this->render('settings');
    }
}


