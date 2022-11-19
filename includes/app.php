<?php

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../models/ActiveRecord.php';
require __DIR__ . '/../models/Propiedad.php';
require __DIR__ . '/../models/Vendedor.php';


// Conectarnos a la BD
$db = conectarDB();

use Model\ActiveRecord;


ActiveRecord::setDB($db);