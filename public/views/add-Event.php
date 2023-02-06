<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/events.css">
    <script src="https://kit.fontawesome.com/366b02c975.js" crossorigin="anonymous"></script>
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
            <div class="add-Event">
                <i class="fa-light fa-plus"></i>
                Add Event
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
                <input name="date" type="text" placeholder="date">
                <textarea name="description" rows="5" placeholder="description"></textarea>

                <input type="file" name="file">
                <button type="submit">Send</button>
            </form>
        </section>

    </main>
</div>
</body>
