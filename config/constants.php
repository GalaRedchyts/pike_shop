<?php
const DB_HOST = "localhost";
const DB_NAME = "final_project";
const DB_CHARSET = "utf8";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_DSN = "mysql:host=". DB_HOST .";dbname=". DB_NAME .";charset=" . DB_CHARSET;
define("DOMAIN", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN ."/assets/";
const VIEW_DIR = ROOT_DIR . '/views';
const APP_DIR = ROOT_DIR . '/app';
const PARTS_DIR = VIEW_DIR . '/parts';
const PAGES_DIR = VIEW_DIR . '/pages';
