<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>pendaftaran universitas aleksander Ucok</title>

</head>
<body>
<table border="1" cellpadding="5" cellspacing="5">
	<tr>
		<td>NAMA</td>
		<td>Satrio Muhamad Daffa</td>
	</tr>
	<tr>
		<td>NIS</td>
		<td>12008155</td>
	</tr>
	<tr>
		<td>RAYON</td>
		<td>CIAWI 4</td>
	</tr>
	<tr>
		<td>ROMBEL</td>
		<TD>RPL X-5</TD>
	</tr>
</table>
<br><br>
<h1>Universitas Aleksander Ucok</h1>
<form method="post" action="hasil.php">
	<table>
	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="nama" placeholder="nama lengkap"></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tempatlahir"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="date" name="tgllahir"></td>
	</tr>
	<tr>
		<td>Alamat Rumah</td>
		<td><input type="textarea" name="alamatrumah"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="jeniskelamin" value="perempuan">perempuan
		<input type="radio" name="jeniskelamin" value="laki-laki">laki-laki</td>
		
	</tr>
	<tr>
		<td>Asal Sekolah</td>
		<td><input type="text" name="asalsekolah"></td>
	</tr>
	<tr>
		<td>Nilai UN</td>
		<td><input type="number" name="nilaiun"></td>
	</tr>
	</table>
	<br>
	<tr>
		<td><button type="submit" name="submit" value="kirim">kirim</button></td>
	</tr>
</form>



