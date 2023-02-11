<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/events.css">
    <script src="https://kit.fontawesome.com/366b02c975.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>Events</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <ul>
                <li>
                    <i class="fa-sharp fa-solid fa-calendar-days"></i>
                    <a href="a" class="button">Events</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-calendar-days"></i>
                    <a href="a" class="button">My Events</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-bell"></i>
                    <a href="a" class="button">Notifications</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-toolbox"></i>
                    <a href="a" class="button">Admin</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-gear"></i>
                    <a href="a" class="button">Settings</a>
                </li>

            </ul>

        </nav>
        <main>
            <header>
                <div class="search-bar">
                    <form>
                        <input placeholder="Search Event">
                    </form>

                </div>
                <div class="add-event">
                    <i class="fa-light fa-plus"></i>
                    Add Event
                </div>

            </header>
            <section class="events">
                <?php require('public/views/common/displayEvents.php'); ?>
            </section>

        </main>
    </div>
</body>

<?php require('public/views/common/eventTemplate.php') ?>