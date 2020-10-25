<?php

$host = "localhost"; /* Host name */
$user = "vrumao"; /* User */
$password = "047869Vr"; /* Password */
$dbname = "db_vrumao"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}