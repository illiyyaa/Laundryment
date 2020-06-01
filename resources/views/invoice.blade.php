@extends('layouts.appreg')
@extends('layouts.header1')

@section('content')
<!doctype html>
<html lang="en">
<head>
<body>
    <div class="container">
        <center>
            <h4>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
            <h5><a target="_blank" href="#">Invoice Laundryment</a></h5>
        </center>
        <br/>
        <a href="/invoice/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
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
 
    </div>   
</body>
<footer>
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
</footer>
</html>