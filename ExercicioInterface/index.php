<?php
include "vendor/autoload.php";

use App\{MySql, MongoDb, DataBase};

$tipo = $_GET['tipo'] ?? false;
$database = new DataBase();
if ($tipo == 1) {
    $db = new MySql();
} else {
    $db = new MongoDB();
}

$database->Gravar($db);
