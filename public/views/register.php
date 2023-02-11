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
            <input name="email" type="text" placeholder="email@email.com">
            <input name="password" type="password" placeholder="password">
            <input name="confirmedPassword" type="password" placeholder="confirm password">
            <input name="name" type="text" placeholder="name">
            <input name="lastname" type="text" placeholder="lastname">
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>