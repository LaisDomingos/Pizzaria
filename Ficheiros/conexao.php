<?php

$host = 'localhost';
$user= 'root';
$password = '';
$database= 'pizzaria_beira';

$mysqli = new mysqli($host, $user, $password, $database);

if($mysqli->error) {
    die("Falha ao conecar com o banco de dados: " . $mysqli->error);
}
?>