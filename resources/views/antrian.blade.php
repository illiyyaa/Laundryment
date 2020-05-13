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
                    <br>
                    <br>
                    <div class="row" style="margin-left: 360px;">
                        
                        <div class="card col-md-2" style="background-color: #4bbd89; margin-right: 50px;">
                                <a href="#"><div class="card-body" style="color: #FFFFFF">
                                Cuci
                                </div><a>
                        </div>
                        <div class="card col-md-2" style="background-color: #4bbd89; margin-right: 50px;">
                                <a href="#"><div class="card-body" style="color: #FFFFFF">
                                Jemur
                                </div><a>
                        </div>
                        <div class="card col-md-2" style="background-color: #4bbd89; margin-right: 50px;">
                                <a href="#"><div class="card-body" style="color: #FFFFFF">
                                Setrika
                                </div><a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
@endsection
