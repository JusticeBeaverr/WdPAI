<?php if (isset($events))
    foreach ($events as $event): ?>
        <div id="<?= $event->getId() ?>">
            <img src="<?= 'public/uploads/' . $event->getImage() ?>"
                 onerror=this.src="public/img/uploads/default.svg">
            <div>
                <p class="date"><?= $event->getDate().' '.$event->getLocation() ?></p>
                <h2><?= $event->getTitle() ?></h2>
                <p class="description"><?= $event->getDescription() ?></p>
                <div class="social-section">
                    <i class="fa-regular fa-circle-check"><?= $event->getLike() ?></i>
                    <i class="fa-regular fa-circle-question"><?= $event->getUncertain() ?></i>
                    <i class="fa-regular fa-circle-xmark"><?= $event->getDislike() ?></i>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
