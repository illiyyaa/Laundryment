@extends('layouts.appreg')
@extends('layouts.header1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <h2>Edit Tabel Invoice</h2> 
        
    </div>
</div>
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
                
                <div class="container">
                <a href="/invoice/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <br>
                <a href="/invoice/edit/{{ $n->invoice_id }}">Edit</a>
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
                 </div>
                 </div>
                 </div>
</footer>
</html>