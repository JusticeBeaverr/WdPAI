<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class SecurityController extends AppController{

    public function login()
    {
        $userRepository = new UserRepository();
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $username = $_POST["username"];
        $password = $_POST["password"];

        try {
            $user = $this->userRepository->getUser($username);
        } catch (Exception $error) {
            return $this->render('login', ["messages" => [$error->getMessage()]]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('password', ['messages' => ['Wrong password!']]);
        }



        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/events");
    }

}
