<?php
    $server = "localhost";
    $user = "root";
    $pass = "";

    try {
        $con = new PDO("mysql:host=$server;dbname=signup", $user, $pass);
        $con = setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect" . $e->getMessage(); 
    }