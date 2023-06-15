@extends('admin.template')       
<?php $title='Edit Pengguna'?>

@section('aturform')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
<?php $header='Edit Pengguna' ?>                
                    
@section('content')       
       <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-edit"></i> Edit Data Pengguna
                </div>

                <div class="card">
                    <div class="card-body">
                        <!--  -->
                        <form class="needs-validation" action="#" method="post" enctype="multipart/form-data" novalidate>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group col-md-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" maxlength="5" onKeyPress="return goodchars(event,'0123456789'.this)" autocomplete="off" required>
                                        <div class="invalid-feedback">Nama tidak boleh kosong.</div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" autocomplete="off" disabled required>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="mb-3">Jenis Kelamin</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="jenis_kelamin" value="Laki-laki" required>
                                            <label class="custom-control-label" for="customControlValidation2">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-4">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="jenis_kelamin" value="Perempuan" required>
                                            <label class="custom-control-label" for="customControlValidation3">Perempuan</label>
                                            <div class="invalid-feedback">Pilih salah satu jenis kelamin.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama" autocomplete="off" required>
                <option value=""></option>
                <option value="Islam">Islam</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Kristen Katolik">Kristen Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
            </select>
                                        <div class="invalid-feedback">Agama tidak boleh kosong.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group col-md-12">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
                                        <div class="invalid-feedback">Tempat lahir tidak boleh kosong.</div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" required>
                                        <div class="invalid-feedback">Tanggal lahir tidak boleh kosong.</div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="2" name="alamat" autocomplete="off" required> </textarea>
                                        <div class="invalid-feedback">Alamat tidak boleh kosong.</div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>No. HP</label>
                                        <input type="text" class="form-control" name="no_hp" maxlength="13" onKeyPress="return goodchars(event,'012345789'.this)" autocomplete="off" required>
                                        <div class="invalid-feedback">No. HP tidak boleh kosong.</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group col-md-12">
                                        <label>Foto Profil</label>
                                        <input type="file" class="form-control-file mb-3" id="foto" name="foto" onchange="return validasiFile()" autocomplete="off" required>
                                        <div id="imagePreview"><img class="foto-preview" src="img/default.png" width="150px" height="200px" /></div>
                                        <div class="invalid-feedback">Foto siswa tidak boleh kosong.</div>
                                    </div>
                                </div>

                            </div>
                            <div class="my-md-4 pt-md-1 border-top"> </div>

                            <div class="form-group col-md-12 right">
                                <input type="submit" class="btn btn-info btn-submit mr-2" name="simpansiswa" value="Simpan">
                                <a href="tabelsiswa.php" class="btn btn-secondary btn-reset">Batal </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection