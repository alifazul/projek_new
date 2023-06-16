@extends('admin.template')     
<?php $title='Tambah Pengguna';

 $header='Tambah Pengguna'; ?>                
                    
@section('content')       
       <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-edit"></i> Input Data Pengguna
                </div>

                <div class="card">
                    <div class="card-body">
                        <!--  -->
                        <form class="needs-validation" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group col-md-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
                                        <div class="invalid-feedback">Nama tidak boleh kosong.</div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    </div>

                                <div class="col">
                                    <div class="form-group col-md-12">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
      
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">

                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="2" name="alamat"> {{ old('alamat') }}</textarea>
                                       
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>No. HP</label>
                                        <input type="number" class="form-control" name="no_hp" maxlength="13" value="{{ old('no_hp') }}">
                                     
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group col-md-12">
                                        <label>Foto Profil</label>
                                        <input type="file" class="form-control-file mb-3" id="image" name="image">

                                    </div>
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
