@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Info Magang
                    </div>

                    <div class="card-body">
                    <form class="needs-validation" action="{{ route('magang.simpan') }}" method="post" enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <div class="row">
                                            <div class="col">
                                            <input type="hidden" name="id_user" value="{{ $user_id }}">
                                                <div class="form-group col-md-12">
                                                    <label>Posisi</label>
                                                    <input type="text" class="form-control" name="posisi" value="{{ old('posisi') }}" required>
                                                    <div class="invalid-feedback">Posisi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Nama Perusahaan</label>
                                                    <input type="text" class="form-control" name="perusahaan" value="{{ old('perusahaan') }}" required>
                                                    <div class="invalid-feedback">Nama Perusahaan tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Kontak Perusahaan</label>
                                                    <input type="text" class="form-control" name="kontak" value="{{ old('kontak') }}" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Jenjang Pendidikan</label>
                                                    <input type="text" class="form-control" name="pendidikan" value="{{ old('pendidikan') }}" required>
                                                    <div class="invalid-feedback">Jenjang Pendidikan tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Link Pendaftaran</label>
                                                    <input type="text" class="form-control" name="link_daftar" value="{{ old('link_daftar') }}" required>
                                                    <div class="invalid-feedback">Link Pendaftaran tidak boleh kosong.</div>
                                                </div>
                                              
                                            </div>
                                            <div class="col">
                                                <div class="form-group col-md-12 ">
                                                    <label>Durasi Magang</label>
                                                    <input type="text" class="form-control" name="durasi" value="{{ old('durasi') }}" required>
                                                    <div class="invalid-feedback ">Durasi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Deadline</label>
                                                    <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="deadline" value="{{ old('deadline') }}" required>
                                                    <div class="invalid-feedback ">Deadline tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Pengumuman</label>
                                                    <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="pengumuman" value="{{ old('pengumuman') }}" required>
                                                    <div class="invalid-feedback ">Pengumuman tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Mulai Magang</label>
                                                    <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="mulai_magang" value="{{ old('mulai_magang') }}" required>
                                                    <div class="invalid-feedback ">Mulai magang tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label>Tipe</label>
                                                <select class="form-control select" name="tipe" style="width: 100%;">
                                                    <option value="WFH">WFH</option>
                                                    <option value="WFO">WFO</option>
                                                    <option value="Hybrid">Hybrid</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col ">
                                                <div class="form-group col-md-12 ">
                                                    <label>Provinsi</label>
                                                    <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi') }}" required>
                                                    <div class="invalid-feedback">Provinsi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Kota/Kabupaten</label>
                                                    <input type="text" class="form-control" name="kabupaten" value="{{ old('kabupaten') }}" required>
                                                    <div class="invalid-feedback">Kabupaten tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label>Sertifikat</label>
                                                <select class="form-control select2" name="sertifikat" style="width: 100%;">
                                                    <option value="iya">iya</option>
                                                    <option value="tidak">tidak</option>
                                                </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Deskripsi(optional)</label>
                                                    <textarea class="form-control" rows="2" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
                                                </div>
                                                @role('pengunjung')
                                                <input type="hidden" value="pending" name="status">
                                                @endrole
                                                @role('admin')
                                                <div class="form-group col-md-12">
                                                <label>Status</label>
                                                <select class="form-control select" name="status" style="width: 100%;">
                                                    <option value="publish">Publish</option>
                                                    <option value="draft">Draf</option>
                                                </select>
                                                </div>
                                                @endrole
                                            </div>
                                        </div>
                                        <div class="my-md-4 pt-md-1 border-top"> </div>
                                        <div class="form-group col-md-12 right">
                                            <input type="submit" class="btn btn-info btn-submit mr-2" value="Kirim" >
                                            <a href="{{ route('home') }}" class="btn btn-secondary btn-reset">Batal</a>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection