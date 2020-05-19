@extends('layouts.appreg')
@extends('layouts.header1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <img src="/img/orang.jpg" style="border-radius: 50%"> 
       
        
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
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Siap Membantu Anda
                    <br>
                    <br>
                    <div class="row">
                        <a href="/riwayatOrder/tambah"> + Tambah Orderan Baru</a>
                        <br>
    
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

                    </div>
                </div>
            </div>
        </div>
</footer>
@endsection
