<?php

$serverName="localhost";
$userName="root";
$password="";
$dbname="hospital";

$connection=mysqli_connect($serverName,$userName,$password,$dbname);

if(!$connection){
    die("Connection Error");
}