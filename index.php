<?php
$connect = mysqli_connect('localhost:3306', 'root', '');
if (!$connect) {
    echo 'could not connected : ' . mysqli_connect_error();
    exit;
}
echo "connected successfully";

// $SQL = "CREATE DATABASE RoocketTest";
mysqli_select_db($connect , 'RoocketTest');
// $SQL = "CREATE TABLE users (id int AUTO_INCREMENT , email varchar(100) not null , pass varchar(100) not null , primary key (id)";
$SQL = "DROP DATABASE RoocketTest";
if ($result = mysqli_query($connect, $SQL)) {
    echo 'query run successfully';
} else {
    echo 'error :' . mysqli_error($connect);
}

mysqli_close($connect);
