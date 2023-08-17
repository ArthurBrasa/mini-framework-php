<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    ini_set('default_charset', 'UTF-8');
    ini_set('date.timezone', 'America/Sao_Paulo');
    ini_set('E_STRICT', 'Off');
    ini_set('log_errors', 'on');
    
    require_once __DIR__ . '/../vendor/autoload.php';

    $route = new \App\Route;