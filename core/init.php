<?php
session_start(); //use to login

$GLOBALS['config'] = array(
        'mysql' => array(
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => '',
            'db' => 'projectone'
        ),
        'remember' => array(
            'cookie_name' => 'hash',
            'cookie_expiry' => 604800
        ),
        'session' => array(
            'session_name' => 'user'
        )
);

spl_autoload_register(function($class){
       require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';



?>