<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/events.css">
    <script src="https://kit.fontawesome.com/366b02c975.js" crossorigin="anonymous"></script>
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
        <section class="events-form">
           <h1>UPLOAD</h1>
            <form action="addEvent" method="POST" enctype="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="title" type="text" placeholder="title">
                <input name="date" type="date" placeholder="date">
                <input name="location" type="text" placeholder="location">
                <textarea name="description" rows="5" placeholder="description"></textarea>

                <input type="file" name="file">
                <button type="submit">Send</button>
            </form>
        </section>

    </main>
</div>
</body>

<style>
    .add-event{
        background: #CCC5C5 0% 0% no-repeat padding-box;
        border: 1px solid black;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        letter-spacing: 0.1em;
        text-align: center;
        width: 20%;


    }
    .add-event > i{
        padding: 1em;
    }

    .search-bar{
        width: 70%;


    }
</style>
