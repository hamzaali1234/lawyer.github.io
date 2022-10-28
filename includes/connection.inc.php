<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "db_lawyer";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    die("Couldn't connect'!!");
}
?>