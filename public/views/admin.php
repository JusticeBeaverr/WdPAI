<!DOCTYPE html>

<?php require('public/views/sessionValidator.php');
if ($_SESSION['admin'] === false) {
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/events");
}
?>

<head>

    <link rel="stylesheet" type="text/css" href="public/css/style.css">
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
                <form class="login" action="deleteEvent" method="POST">
                    <p></p>
                    <input name="id" type="text" placeholder="Enter event id">
                    <p></p>
                    <p></p>
                    <button class="loginButton" type="submit">
                         &nbsp; Delete
                    </button>
                </form>
            </div>
        </section>
    </main>
</div>
</body>