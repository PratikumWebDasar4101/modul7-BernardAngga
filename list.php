<?php
require_once("dbserver.php");

if (isset($_GET["cari"])) {
	$value = $_GET["cari"];
	$query = "SELECT * FROM jurnal WHERE nim like '%$value%'";
}else {
	$query = "SELECT * FROM jurnal";
}

$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1">
	<tr>
		<tr>
		<td>
			<form action="list.php" method="get">
				<input type="text" name="cari" placeholder="cari nama">
				<input type="submit">
			</form>
		</td>
	</tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>JenisKelamin</th>
			<th>Prodi</th>
			<th>Fakultas</th>
			<th>Asal</th>
			<th>Motto Hidup</th>
		</tr>
	<?php if(mysqli_num_rows($result) > 0) : ?>
		<?php while($rows = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $rows["nama"] ?></td>
				<td><?php echo $rows["nim"] ?></td>
				<td><?php echo $rows["JenisKelamin"] ?></td>
				<td><?php echo $rows["Prodi"] ?></td>
				<td><?php echo $rows["fakultas"] ?></td>
				<td><?php echo $rows["asal"] ?></td>
				<td><?php echo $rows["motto"] ?></td>
			</tr>
		
	<?php } endif ?>
</table>
</body>
</html>