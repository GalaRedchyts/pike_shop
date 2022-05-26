<?php
$content = convertToAssoc(db_select(
    'content'
));
require_once PARTS_DIR . '/banner.php';
require_once PARTS_DIR . '/pets-tutorials.php';
require_once PARTS_DIR . '/goods.php';
require_once PARTS_DIR . '/gallery.php';
require_once PARTS_DIR . '/review.php';
require_once PARTS_DIR . '/blog.php';