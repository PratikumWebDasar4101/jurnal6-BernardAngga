<?php
 require_once("koneksi.php");
 if(isset($_POST["submit"])) {
 	$username = $_POST["username"];
 	$password = $_POST["password"];
 	$nama = $_POST["nama"];
 	$nim = $_POST["nim"];
 	$kelas = $_POST["kelas"];
 	$kelamin = $_POST["kelamin"];
 	$hobi = $_POST["hobi"];
 	$fakultas = $_POST["fakultas"];
 	$alamat = $_POST["alamat"];

if ($nama > 35) {
	echo "Nama terlalu singkat /  panjang";

}
if (is_numeric($nim) == false || strlen((string)$nim) > 10 ){
	echo "NIM harus angka dan maks 10 angka";
}else{
	$sql = "INSERT INTO mahasiswa VALUES ('$username','$password','$nama','$nim','$kelas','$kelamin',' ".implode(",",$hobi) . "','$fakultas','$alamat')";

if (mysqli_query($conn, $sql)){
	echo "Data berhasil di tambahkan";
}else{
	echo "Terjadi Kesalahan : ". mysqli_connect_error();
}
}
}else{
	echo "register dulu"
}