<!DOCTYPE html>
<html>
<head>
	<title>Mengedit Order</title>
</head>
<body>

	<h3>Edit Pegawai</h3>

	<a href="/riwayatOrder"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($riwayatorder as $p)
	<form action="/riwayatOrder/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->order_id }}"> <br/>
		
		Nomor Order <input type="text" required="required" name="nomor_order" value="{{ $p->nomor_order }}"> <br/>
		Nama Pelanggan <input type="text" required="required" name="nama pelanggan" value="{{ $p->nama_pelanggan }}"> <br/>
		Alamat Pelanggan <input type="text" required="required" name="alamat pelanggan" value="{{ $p->alamat_pelanggan }}"> <br/>
		Telp Pelanggan <input type="text" required="required" name="telp pelanggan" value="{{ $p->telp_pelanggan }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->status }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>