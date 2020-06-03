@extends('layouts.appreg')
@extends('layouts.header1')

@section('content')

<footer>
<div class="col-md-12">
            <div class="card-invoice" style="background-color: white;display: flex;margin-top: 20%;position: absolute;margin-left: 25%;">
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
                
                <div class="container" style="position: absolute;margin-top: 20%;margin-left: 25">
                <a href="/invoice/cetak_pdf" class="btn btn-primary" target="_blank" style="position: absolute;margin-top: 25%;">CETAK PDF</a>

                <br>
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
                        <a href="/invoice/edits/{{ $n->invoice_id }}" class="btn btn-primary" target="_blank" style="position: absolute;margin-top: 15%;">EDIT</a>
                        <!-- <button style="position: absolute;margin-top: 20%;width: 10%;"><a href="/invoice/edits/{{ $n->invoice_id }}">Edit</a></button> -->
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    
                 </div>
                 </div>
                 </div>
</footer>
</html>