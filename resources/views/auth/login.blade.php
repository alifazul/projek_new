@extends('auth.templatelogreg')

@section('content')
<div class="d-md-flex half">
        <div class="bg" style="background-image: url('logreg/images/bg_2.jpg'); background-size: 1000 px;"></div>
        <div class="contents">
            <div class="container">
                <div class="align-items-center justify-content-center">
                    <div class="text-center setapa">
                        <h1 class="setheader">GrowthSpace</h1>
                        <p class="setlogin"><strong>LOGIN</strong></p>
                        <p class="setp">Silahkan login terlebih dahulu disini</p>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <form action="{{ route('login') }}" method="POST">
                            @csrf
                                <div class="form-group first">
                                    <label for="email"><b>Email Address</b></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="your-email@gmail.com" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password"><b>Password</b></label>
                                    <input type="password" placeholder="Your Password" id="password"  class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="d-sm-flex mb-3 align-items-center">
                                @if (Route::has('password.request'))
                                    <span class="ml-auto">
                                    <a href="{{ route('password.request') }}" class="forgot-pass">Lupa Password</a>
                                    </span>
                                @endif
                                </div>
                                <input type="submit" value="LOGIN" class="btn btn-primary">
                                <div class="d-sm-flex align-items-center setlink">
                                    <span class="mx-auto"><span class="setreg">Belum Memiliki Akun?</span><a href="{{ route('register') }}" class="link-reg">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
