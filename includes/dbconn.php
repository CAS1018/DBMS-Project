<?php
    $user = 'root';
    $password = 'root';
    $db = 'dbms';
    $host = 'localhost';
    $port = 3306;
    
    session_start();
    $conn = new mysqli($host, $user, $password, $db) or die("Unable to connect");
?>