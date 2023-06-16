@extends('admin.template')     
<?php $title='Edit Pengguna';

 $header='Edit Pengguna'; ?>                
                    
@section('content')       
       <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-edit"></i> Edit Data Pengguna
                </div>

                <div class="card">
                    <div class="card-body">
                        <!--  -->
                        <form class="needs-validation" action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col">
                                    <div class="form-group col-md-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" value="{{ old('name', $user->nama) }}" required>
                                        <div class="invalid-feedback">Nama tidak boleh kosong.</div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
                                    </div>
                                <div class="col">
                                    <div class="form-group col-md-12">
                                        <label>Password Baru</label>
                                        <input type="password" class="form-control" name="pass" value="{{ old('pass') }}">
                                    </div>

                            </div>
                            <div class="my-md-4 pt-md-1 border-top"> </div>

                            <div class="form-group col-md-12 right">
                                <input type="submit" class="btn btn-info btn-submit mr-2" value="Simpan">
                                <a href="{{ route ('user.index') }}" class="btn btn-secondary btn-reset">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
