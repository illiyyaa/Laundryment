@extends('layouts.appreg')
@extends('layouts.header1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <h2>Invoice</h2> 
        
    </div>
</div>

<div class="col-md-12">
            <div class="card">
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
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Siap Membantu Anda
                    <br>
                    <br>
    <a href="/invoice/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
     <table border="0" style="position: absolute;margin-top: 20%;">
		<tr>
			<th>No Order</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Items</th>
			<th>Total</th>
		</tr>
		@foreach($invoice as $p)
		<tr>
			<td>{{ $p->no_order }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->items }}</td>
			<td>{{ $p->total }}</td>
		</tr>
		<button style="position: absolute;margin-top: 30%;width: 10%;"><a href="/invoice/edit/{{ $p->no_order }}">Edit</a></button>
		@endforeach
	</table>