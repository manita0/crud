<?php
$servername="localhost";
$username="root";
$password="";
$databasename="phpCrud";

$con = new mysqli($servername, $username, $password, $databasename, 3307); // 3306 is default port number.. since I changed it so I'm writing here.

if($con->connect_error){
    die("connection failed ". $con->connect_error);
}
?>