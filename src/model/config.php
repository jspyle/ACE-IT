<?php
session_start();

$host = "proj-mysql.uopnet.plymouth.ac.uk"; /* Host name */
$user = "PRCO204_H"; /* User */
$password = "S6qYB7BMQ0YurT43"; /* Password */
$dbname = "PRCO204_H"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());}