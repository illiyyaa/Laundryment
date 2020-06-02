@extends('layouts.appreg')
@extends('layouts.header1')

<!DOCTYPE html>
<html>
<head>
	<title>Mengedit invoice</title>
</head>
<body>
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
	<h3>Edit Invoice</h3>

	<a href="/invoice"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($invoice as $p)
	<form action="/invoice/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->order_id }}"> <br/>
		
		Nomor Order <input type="text" required="required" name="nomor_order" value="{{ $p->nomor_order }}"> <br/>
		Nama Pelanggan <input type="text" required="required" name="nama pelanggan" value="{{ $p->nama_pelanggan }}"> <br/>
		Alamat Pelanggan <input type="text" required="required" name="alamat pelanggan" value="{{ $p->alamat_pelanggan }}"> <br/>
		Telp Pelanggan <input type="text" required="required" name="telp pelanggan" value="{{ $p->telp_pelanggan }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->status }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	</div>
	@endforeach
		

</body>
</html>