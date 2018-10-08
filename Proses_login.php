<?php
session_start();
require_once("coba.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username, password FROM mahasiswa WHERE username='$username' and password='$password'";
$result = mysqli_query ($conn,$sql);
 if(mysqli_num_rows($result) == 1){
 	$_SESSSION["username"] = $username;
 	$_SESSSION["password"] = $password;
 	echo "berhasil login";
 }else{
 	echo "gagal login"
 }