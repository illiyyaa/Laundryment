<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Riwayat Order</h3>

	<a href="/riwayatOrder/tambah"> + Tambah Orderan Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nomor Order</th>
			<th>Nama Pelanggan</th>
			<th>Alamat Pelanggan</th>
			<th>Telpon Pelanggan</th>
			<th>Status</th>
		</tr>
		@foreach($riwayatorder as $p)
		<tr>
			<td>{{ $p->nomor_order }}</td>
			<td>{{ $p->nama_pelanggan }}</td>
			<td>{{ $p->alamat_pelanggan }}</td>
			<td>{{ $p->telp_pelanggan }}</td>
			<td>{{ $p->status }}</td>
			<td>
				<a href="/riwayatOrder/edit/{{ $p->order_id }}">Edit</a>
				|
				<a href="/riwayatOrder/hapus/{{ $p->order_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>