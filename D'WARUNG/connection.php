<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$dbname = "fyp3";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname, "6969"))
{

	die("failed to connect!");
}
