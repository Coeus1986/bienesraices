<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'id21786926_root', 'Cbr1067842938#', 'id21786926_bienesraicesdb');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}