<?php
$connection = mysqli_connect('192.168.100.1', 'alex', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'mashlog_demo1');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}