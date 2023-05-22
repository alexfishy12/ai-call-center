<?php
$dbhost="localhost";
$dbuser="callcenter";
$dbpass="pass123";
$dbname="callcenterdb";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)
    or die("<br> Cannot connect to DB: $dbname on $dbhost");
?>