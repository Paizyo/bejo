<?php
$koneksi = new mysqli('localhost', 'root', '', 'paijo')
or die(mysqli_error($koneksi));


if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien','$nmPasien','$jk','$alamat')");

    header("location:pasien.php");
}


if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET idPasien='$idPasien', nmPasien='$nmPasien', jk='$jk', alamat='$alamat' where idPasien='$idPasien'");
    header("location:pasien.php");
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM admin where id = '$id'");
    header("location:users.php");
}
if (isset($_POST['users'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $koneksi->query("INSERT INTO admin (username, password, role) VALUES ('$username','$password','$role')");

    header("location:users.php");
}
?>