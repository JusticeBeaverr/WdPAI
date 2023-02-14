<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <label for="login">Signin</label>
                <input name="username" type="text" placeholder="Username">
                <input name="password" type="password" placeholder="Password">
                <button type="submit">Submit</button>
                <button class="home">
                    <a href="register">SignUp</a>
                </button>
            </form>
        </div>
    </div>
</body>

<style>

    a{
        color: black;
    }
</style>