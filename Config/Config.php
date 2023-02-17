<?php 
    namespace Config;

    define("ROOT", dirname(__DIR__) . "/");
    //Path to your project's root folder
    define("FRONT_ROOT", "/Laboratorio 4 PHP/Sistema de analisis de datos/");
    define("VIEWS_PATH", "Views/");
    define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "css/");
    define("JS_PATH", FRONT_ROOT.VIEWS_PATH . "js/");

    define("DB_HOST", "localhost");
    define("DB_NAME", "municipalidad");
    define("DB_USER", "root");
    define("DB_PASS", "");
?>