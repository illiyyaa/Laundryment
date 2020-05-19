@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6">
    <div class="row">
    
    </div>
      
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body bg-light">
            <img src="{{url('img/Logo.png')}}" style="margin-left:200px" width ="100" alt="">
            <h1 class="row justify-content-center" style="color: #8c8c8c">Masuk</h1>
            <h6 class="row justify-content-center" style="color: #8c8c8c">Login menggunakan akun Laundryment anda</h6>
            <br>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class=" offset-md-4 text-md-right">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email anda" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <div class="offset-md-4 text-md-right">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password anda" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="offset-md-4 text-md-right">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" style="color: #8c8c8c" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="offset-md-4 text-md-right">
                            <button type="submit" class="btn" style="background-color: #4bbd89; color: #FFFFFF; width: 184px;">
                                {{ __('Masuk') }}
                            </button>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link"  style="color: #4bbd89" href="{{ route('password.request') }}">
                                    {{ __('Lupa password anda?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <hr class="col-md-4 col-form-label text-md-right" style="margin-left:155px">
                    <br>
                    <br>
                    <h6 class="row justify-content-center" style="color: #8c8c8c">atau</h6>
                    <div class="form-group row">
                        <div class="offset-md-4 text-md-right">
                            <button class="btn border" style="width: 184px;" ><a  style="color: #4bbd89; text-decoration: none;" href="{{ route('register') }}">{{ __('Buat Akun') }} </a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#4bbd89" fill-opacity="1" d="M0,256L40,245.3C80,235,160,213,240,192C320,171,400,149,480,133.3C560,117,640,107,720,112C800,117,880,139,960,154.7C1040,171,1120,181,1200,154.7C1280,128,1360,64,1400,32L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
</svg> --}}
@endsection



