<?php 

function conectarDB() : mysqli {
    $db = mysqli_connect('127.0.0.1', 'root', '', 'database');
    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    }
    return $db;
}