 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>document</title>
</head>
<body>
	<h2>data anda:)</h2>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $_POST['nama'] ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><?php echo $_POST['tempatlahir'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $_POST['tgllahir'] ?></td>
		</tr>
		<tr>
			<td>Alamat rumah</td>
			<td>:</td>
			<td><?php echo $_POST['alamatrumah'] ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $_POST['jeniskelamin'] ?></td>
		</tr>
		<tr>
			<td>Asal Sekolah</td>
			<td>:</td>
			<td><?php echo $_POST['asalsekolah'] ?></td>
		</tr>
		<tr>
			<td>Nilai UN</td>
			<td>:</td>
			<td><?php echo $_POST['nilaiun'] ?></td>
		</tr>

	</table>
</body>
</html>