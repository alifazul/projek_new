@extends('auth.templatelogreg')

@section('content')
<div class="d-md-flex half">
        <div class="bg" style="background-image: url('logreg/images/bg_2.jpg'); background-size: 1000 px;"></div>
        <div class="contents">
            <div class="container">
                <div class="align-items-center justify-content-center">
                    <div class="text-center setapa">
                        <h1 class="setheader">GrowthSpace</h1>
                        <p class="setlogin"><strong>REGISTER</strong></p>
                        <p class="setp">Silahkan registrasi terlebih dahulu disini</p>
                    </div>
            
                <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group first">
                                <label for="nama"><b>Nama</b></label>
                                <input id="nama" type="text" placeholder="Your Name" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

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

                        <div class="form-group last mb-3">
                            <label for="password-confirm"><b>Konfirmasi Password</b></label>
                            <input id="password-confirm" type="password"  placeholder="Confirm Your Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            @error('konfirmasi password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <input type="submit" value="REGISTRASI" class="btn btn-primary">
                                <div class="d-sm-flex align-items-center setlink">
                                    <span class="mx-auto"><span class="setreg">Sudah Memiliki Akun?</span><a href="{{ route('login') }}" class="link-reg">Login</a></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
