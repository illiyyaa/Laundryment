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

	@foreach($invoice as $n)
	<form action="/invoice/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $n->invoice_id }}"> <br/>
		
		No Order <input type="text" required="required" name="no_order" value="{{ $n->no_order }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $n->nama }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $n->alamat }}"> <br/>
		items <input type="text" required="required" name="items" value="{{ $n->items }}"> <br/>
		total <input type="text" required="required" name="total" value="{{ $n->total }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	</div>
	@endforeach
		

</body>
</html>