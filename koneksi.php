<?php 
 
$host = "localhost";
$user = "root";
$password = "";
$database = "dbs_print";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
 
if($koneksi->connect_error){
	die("Koneksi gagal");
}
 
?>