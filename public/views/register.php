<!DOCTYPE html>

<head>

    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>Register</title>
</head>

<body>
<div class="container">

    <div class="login-container">
        <form class="register" action="register" method="POST">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <label for="register">Signup</label>
            <input name="username" type="text" placeholder="Username">
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <input name="confirmedPassword" type="password" placeholder="Confirm password">
            <input name="name" type="text" placeholder="Name">
            <input name="lastname" type="text" placeholder="Lastname">
            <button type="submit">Submit</button>
            <button class="button">
                <a href="login">Have account already? Signin</a>
            </button>
        </form>
    </div>
</div>
</body>

<style>
    form.register{
        width: 70vw;
        height: 100%;
    }
a{
    color: black;
}
</style>