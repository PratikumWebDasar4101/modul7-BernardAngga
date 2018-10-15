<?php
require_once("dbserver.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jk = $_POST["jk"];
$prodi = $_POST["prodi"];
$fklts = $_POST["fklts"];
$asal = $_POST["asal"];
$motto = $_POST["motto"];

$query = "INSERT INTO jurnal values('$nama','$nim','$jk','$prodi','$fklts','$asal','$motto')";

if(mysqli_query($conn,$query)){
	header("location: list.php");

}else{
echo mysqli_error($conn);	
}
?>