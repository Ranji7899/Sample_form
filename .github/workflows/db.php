<?php
$servername="localhost";
$username="root";
$password="";
$dbname="task";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(!$conn){
    die('Could not Connect MySql Server');
}


?>