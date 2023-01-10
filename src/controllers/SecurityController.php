<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
class SecurityController extends AppController{

    public function login()
    {
        $user = new User('jsnow@pk.edu.pl', "nowak21",'admin');

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($user->getUsername() !== $username) {
            return $this->render('login', ['messages' => ['User with this username not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/events");
    }

}
