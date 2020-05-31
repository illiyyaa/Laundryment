@extends('layouts.appreg')
@extends('layouts.header1')

<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Order Baru</title>
</head>
<body>
	
	<br/>
	<br/>

	<div class="col-md-12">
            <div class="card" style="border: none;">
                <div class="card-header" style="display: none;"> <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>    
                </div>
   	<div class="container-card" style="position: absolute;
    margin-top: 16%;">
   	<a href="/riwayatOrder"> Kembali</a>
	<form action="/riwayatOrder/store" method="post">
		{{ csrf_field() }}
		Nomor Order <input type="text" name="nomor_order" required="required"> <br/>
		Nama Pelanggan <input type="text" name="nama_pelanggan" required="required"> <br/>
		Alamat Pelanggan <input type="text" name="alamat_pelanggan" required="required"> <br/>
		Telp Pelanggan <input type="text" name="telp_pelanggan" required="required"> <br/>
		status <textarea name="status" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	</div>

</div>
</body>
</html>