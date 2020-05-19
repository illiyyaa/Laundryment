<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Order Baru</title>
</head>
<body>

	<h3>Order History</h3>

	<a href="/riwayatOrder"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/riwayatOrder/store" method="post">
		{{ csrf_field() }}
		Nomor Order <input type="text" name="nomor_order" required="required"> <br/>
		Nama Pelanggan <input type="text" name="nama_pelanggan" required="required"> <br/>
		Alamat Pelanggan <input type="text" name="alamat_pelanggan" required="required"> <br/>
		Telp Pelanggan <input type="text" name="telp_pelanggan" required="required"> <br/>
		status <textarea name="status" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>