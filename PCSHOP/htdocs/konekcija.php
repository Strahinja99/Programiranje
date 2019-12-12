<?php
$host = "sql300.epizy.com";
$server_username = "epiz_24836655";
$server_pass = "cEWlDZaZGgQgbK";
$base = "epiz_24836655_baza";
$conn = mysqli_connect($host,$server_username, $server_pass,$base);

if (!$conn) {
    die("Neuspesno konektovani: " . mysqli_connect_error());
}

?>