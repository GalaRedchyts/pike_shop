<?php
const ROOT_DIR = __DIR__;
if (!session_id()) {
    session_start();
}
require_once __DIR__ . '/config/constants.php';
require_once __DIR__ . '/config/DB.php';
require_once APP_DIR . '/index.php';

if (!empty($_POST)) {
    require APP_DIR . '/form_scripts/controller.php';

}else {
    require_once PARTS_DIR . '/header.php';

    require_once __DIR__ . '/config/routes.php';

    require_once PARTS_DIR . '/footer.php';
}



