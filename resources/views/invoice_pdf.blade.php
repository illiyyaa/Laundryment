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
 	<div class="logo-laundry">
 		<img src="https://camo.githubusercontent.com/722ff13bd24948f76b561d124140c1eaac5a6b6b/68747470733a2f2f692e696d6775722e636f6d2f336265323439522e706e67" alt="Italian Trulli">
 		<h2 style="text-align: right;">INVOICE</h2>
 	</div>
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
			@foreach($invoice as $n)
			<tr>
				<td>{{ $n->no_order }}</td>
				<td>{{ $n->nama }}</td>
				<td>{{ $n->alamat }}</td>
				<td>{{ $n->items }}</td>
				<td>{{ $n->total }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<br>
	<br>
	<br>
 	<h3 style="color:#4bbd89; text-align: right;">Total Bayar = {{ $n->total }}</h3>
</body>
</html>