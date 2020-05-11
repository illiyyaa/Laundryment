@extends('layouts.appreg')

@section('content')

<div class="container">
 <img class="row justify-content-center " src="{{url('img/Logo.png')}}" style="margin-left:500px" width ="100" alt="">
 <br>
 <h1 class="row justify-content-center" style="color: #8c8c8c">Daftar</h1>
 <h5 class="row justify-content-center" style="color: #8c8c8c">Buat Akun Laundryment Anda</h5>
 <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" style="width: 250px;" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" style="width: 250px;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" style="width: 250px;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" style="width: 250px;" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi password">
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                   <label for="number" class="col-md-4 col-form-label text-md-right" ></label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" style="width: 250px;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Nomor Telepon (+62)">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn" style="background-color: #4bbd89; color: #FFFFFF; width: 250px;">
                                            {{ __('Daftar') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr class="col-md-4 col-form-label text-md-right" style="margin-left:270px" >
                        <br>
                        <br>
                        <h5 class="row justify-content-center" style="color: #8c8c8c; margin-left:160px"> Sudah Punya akun? <br><a style="color:  #4bbd89; text-decoration: none;" href="{{ route('login') }}">{{ __('Masuk') }}</a><h5>

                    </form>
        </div>
    </div>
</div>
@endsection
