<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "coursat_system";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) {
  die("فشل في الاتصال");
}