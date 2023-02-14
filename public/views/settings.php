<!DOCTYPE html>

<?php require('public/views/sessionValidator.php') ?>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/settings.css">
    <title>Settings</title>
</head>

<body>
<div class="base-container">
    <?php require('public/views/layout.php'); ?>
    <main>
        <header>
            <div class="search-bar">
                <input class="search" type="text" placeholder="Search Event">
            </div>

            <div class="add-event">
                <a href="addEvent">
                    <i class="fa-solid fa-plus"></i>
                    Add event
                </a>
            </div>
        </header>

        <section class="settings">
            <div class="login-container">

                <form class="login" action="settings" method="POST">
                    <label for="info">Change your information</label>
                    <input name="name" type="text" placeholder="name">
                    <input name="lastname" type="text" placeholder="surname">
                    <input name="username" type="text" placeholder="username">
                    <input name="email" type="email" placeholder="email">
                    <input name="password" type="password" placeholder="password">
                    <input name="confirmedPassword" type="password" placeholder="re-enter password">
                    <p></p>
                    <button class="loginButton" type="submit">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> &nbsp; Save
                    </button>
                </form>
            </div>
        </section>
    </main>
</div>
</body>

<style>
    .add-event{
        background: #CCC5C5 ;
        border: 1px solid black;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        letter-spacing: 0.1em;
        text-align: center;
        width: 20%;
        height: 5vh;
        margin: 1em;


    }
    .add-event > i{
        padding: 1em;
    }

    .search-bar{
        width: 70%;
        letter-spacing: 0.1em;
        text-align: center;
        width: 140%;
        height: 5vh;

    }
    a{
        color: black;
    }

    input, textarea {
        text-align: center;
        font-family: 'Kaisei Opti';
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        line-height: 15px;
        color: rgba(0, 0, 0, 0.5);
        border: 1px;
        padding: 1em;
        margin: 2px;
        width: 70%;
    }

    .settings input {
        margin-bottom: 20px;
        width: 30%;
    }

    log
</style>