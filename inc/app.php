<?php 

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

//conectar BD
$conexion_db = conectarDB();

use App\Tema;


Tema::setDB($conexion_db);

// var_dump(Tema::all());

