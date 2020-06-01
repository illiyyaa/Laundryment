<!DOCTYPE html>
<html>
<head>
	<title>Download/Cetak Invoice Anda</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
 	
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No Order</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Items</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($invoice as $p)
			<tr>
				<td>{{ $p->no_order }}</td>
				<td>{{ $p->nama }}</td>
				<td>{{ $p->alamat }}</td>
				<td>{{ $p->items }}</td>
				<td>{{ $p->total }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>