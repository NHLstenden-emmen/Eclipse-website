<?php
    session_start();
    // change the example.env.php to .env.php
    try {
        if (!file_exists(".env.php")) {
            throw new Exception("Env file was not found");
        }
        $env = include '.env.php';
    } catch(Exception $e) {
        echo $e->getMessage();
    }

    // get the current location / path of the page
    $pagePath = basename($_SERVER['REQUEST_URI'], '.php');
    if (strpos($pagePath, '?') !== false) {   
        $pagePath = substr($pagePath, 0, strpos($pagePath, "?")); 
    }

    // main dependencies
    include 'inc/mysql.php';
    $db = new Database();
    include 'inc/header.php';
    
    // build the website
    include 'pages/content.php';
?>