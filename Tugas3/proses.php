<?php 
if(isset($_POST['judul']))
{
$judul = $_POST['judul'];
$nama = $_POST['nama'];
echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
echo "Nama : ".$judul."<br/>Alamat : ".$nama;
}
//--------------------------------------------------------------------
if(isset($_GET['judul']))
{
$judul = $_GET['judul'];
$nama = $_GET['nama'];
echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
echo "Nama : ".$judul."<br/>Alamat : ".$nama;
}
?>