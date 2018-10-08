<?php
require_once("konek.php");
if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $kelas = $_POST["kelas"];
    $kelamin = $_POST["kelamin"];
    $hobi = $_POST["hobi"];
    $fakultas = $_POST["fak"];
    $alamat = $_POST["alamat"];
    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', kelas='$kelas', kelamin='$kelamin', hobi='" . implode(",",$hobi) . "', fakultas='$fakultas', alamat='$alamat' WHERE nim=$nim";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        echo "<p text-align: center'>Record updated successfully</p>";
        echo "<p text-align: center'>Silahkan klik <a href='list.php'>link ini</a> untuk melanjutkan</p>";
    }else {
        echo "Error updating record: " . $query . "<br>" . mysqli_error($conn);
    }
}else {
    header("Location: list.php");
}