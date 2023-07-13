<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "rootpass";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("No hay conexion" . mysqli_connect_error());
}


$nombre = $_POST["txtusuario"];
$password = $_POST["txtpassword"];
$query = mysqli_query($conn, " SELECT * FROM login WHERE usuario = '" . $nombre . "' and password = '" . $password . "'");
$nr = mysqli_num_rows($query);
if ($nr === 1) {
    header("Location: inicio.php");
} else {
    echo "No ingreso";
}
