<?php

$server='localhost:3306';
$username = 'root';
$password = '';
$database = 'jds_database';

try{
    $con  = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    echo "";
}catch(PDOException $e){
        die('conexion  de error:' . $e->getMessage());
    }


?>