<?php if (isset($events))
    foreach ($events as $event): ?>
        <div id="<?= $event->getId() ?>">
            <img src="<?= 'public/uploads/' . $event->getImage() ?>"
                 onerror=this.src="public/img/uploads/koncert.jpg">
            <div>


                <p class="date"><?= $event->getDate() . ' ' .$event->getLocation() ?></p>
                <h2><?= $event->getTitle() ?></h2>
                <p class="description"><?= $event->getDescription() ?></p>
                <div class="social-section">
                    <i class="fa-sharp fa-solid fa-check"></i></i> <?= $event->getLike() ?></i>
                    <i class="fa-sharp fa-solid fa-question"></i></i> <?= $event->getUncertain() ?></i>
                    <i class="fa-sharp fa-solid fa-x"></i> <?= $event->getDislike() ?></i>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
