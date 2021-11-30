<?php
$localhost  = "localhost";
$username   = "root";
$password   = "";
$db         = "bdsistemas";

try {
    $connect = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
    } catch(PDOException $e) {
    echo "conexão falhou:<br> ".$e->getMessage();



}