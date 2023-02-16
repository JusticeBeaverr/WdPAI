<!DOCTYPE html>
<?php require('public/views/sessionValidator.php') ?>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/events.css">

    <script src="https://kit.fontawesome.com/366b02c975.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/stats.js" defer></script>
    <title>Events</title>
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

        <section class="events">
            <?php require('public/views/displayEvents.php'); ?>
        </section>
    </main>
</div>
</body>

<?php require('public/views/eventTemplate.php') ?>

<style>

    section {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 2em;
        padding: 2em;
        overflow: auto;
    }
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
        margin: 1px;
        width: 70%;
    }
    p.description{
        width: 85%;
    }

</style>
