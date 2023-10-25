<?php
include "config.php";
include "utils.php";

$dbConn = connect($db);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Consulta todos los usuarios
    $sql = $dbConn->prepare("SELECT * FROM usuario");
    $sql->execute();
    $users = $sql->fetchAll(PDO::FETCH_ASSOC);

    // Crear una respuesta JSON con la lista de usuarios
    $response = json_encode($users);

    // Devolver la respuesta con cabeceras CORS para permitir el acceso desde cualquier origen
    header("HTTP/1.1 200 OK");
    header("Access-Control-Allow-Origin: *"); // Permitir acceso desde cualquier origen
    header("Content-Type: application/json");
    echo $response;
}
?>
