<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli ("localhost:3306", "root", "root", "actividades");

if($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" .
    $mysqli->connect_errno . ") " .
    $mysqli->connect_error;
} else{
    echo "todo ta fachero";
}