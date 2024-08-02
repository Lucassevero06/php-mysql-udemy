<?php

$host = '127.0.0.1';
$user = 'master';
$pass = 'Leonardo24#';
$db = 'cursophpudemy';

$con = new mysqli($host, $user, $pass, $db);

if ($con->connect_error) {
    echo $con->connect_error;
} else {
    echo 'Conectado';
}