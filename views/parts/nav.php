<?php
$nav = convertToAssoc(db_select(
    'content',
    conditions: "name = 'navigation'"
)); ?>
<header id="header">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div id="logo">
                <a href="index.html">
                    <img src="<?= $nav['navigation']['logo']['image'] ?>" alt="<?= $nav['navigation']['logo']['alt'] ?>" />
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <?php foreach ($nav['navigation']['links'] as $key => $item): ?>
                    <li class="menu-active" <?= ($key == 0 ? 'active' : '') ?>>
                        <img src="<?= $item['image'] ?>">
                        <a href="<?= $item['href'] ?>">
                            <?= $item['title'] ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    <li>|</li>
                <li><img src="assets/images/registered.png">
                        <a href="<?= DOMAIN ?>/register">Sign Up</a></li>
                    <li><img src="assets/images/registered.png">
                        <a href="<?= DOMAIN ?>/login">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

