<!DOCTYPE html>
<html>
<head>
	<title>FormRegistrasi</title>
</head>
<body>
	<form action="submit.php" method="POST">
<table>
	<tr>
		<td>NAMA</td>
		<td>:</td>
		<td><input type="text" name="nama">
		</td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
<td><input type="text" name="nim"></td>
</tr>
<tr>
	<td>JenisKelamain</td>
	<td>:</td>
	<td>
<input type="radio" name="jk" value="laki-laki">laki-laki
<input type="radio" name="jk" value="perempuan">perempuan
</td>
</tr>
<tr>
	<td>Prodi</td>
	<td>:</td>
	<td>
		<select name="prodi">
			<option value="D4 Sistem Multimedia">D4 Sistem Multimedia</option>
			<option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
			<option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
			<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
		</select>
</td>
</tr>
<tr>
	<td>Fakultas</td>
	<td>:</td>
	<td>
		<select name="fklts">
			<option value="fakultas ilmu terapan">fakultas ilmu terapan</option>
			<option value="fakultas rekayasa industri">fakultas rekayasa industri</option>
			<option value="fakultas industri kreatif">fakultas industri kreatif</option>
			<option value="fakultas komunikasi dan bisnis">fakultas komunikasi dan bisnis</option>
		</select>
</td>
</tr>
<tr>
	<td>Asal</td>
	<td>:</td>
	<td><input type="text" name="asal">
	</td>
</tr>
<tr>
<td>Motto Hidup</td>
<td>:</td>
<td>
<textarea name="motto" cols="30" rows="10"></textarea>
</td>
</tr>

<tr>
	<td><input type="submit" name="submit">
</td>
</tr>
</form>
</table>
</body>
</html>