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
                    <form class="needs-validation" action="{{ route('magang.change', $magang->id) }}" method="post" enctype="multipart/form-data" novalidate>
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                            <div class="col">
                                            <input type="hidden" name="id_user" value="{{ old('id_user', $magang->user_id) }}">
                                                <div class="form-group col-md-12">
                                                    <label>Posisi</label>
                                                    <input type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ old('posisi', $magang->posisi) }}" required>
                                                    <div class="invalid-feedback">Posisi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Nama Perusahaan</label>
                                                    <input type="text" class="form-control  @error('perusahaan') is-invalid @enderror" name="perusahaan" value="{{ old('perusahaan', $magang->perusahaan) }}" required>
                                                    <div class="invalid-feedback">Nama Perusahaan tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Kontak Perusahaan</label>
                                                    <input type="text" class="form-control  @error('kontak') is-invalid @enderror" name="kontak" value="{{ old('kontak', $magang->kontak) }}" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Jenjang Pendidikan</label>
                                                    <input type="text" class="form-control  @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan', $magang->pendidikan) }}" required>
                                                    <div class="invalid-feedback">Jenjang Pendidikan tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Link Pendaftaran</label>
                                                    <input type="text" class="form-control  @error('link_daftar') is-invalid @enderror" name="link_daftar" value="{{ old('link_daftar', $magang->link_daftar) }}" required>
                                                    <div class="invalid-feedback">Link Pendaftaran tidak boleh kosong.</div>
                                                </div>
                                              
                                            </div>
                                            <div class="col">
                                                <div class="form-group col-md-12 ">
                                                    <label>Durasi Magang</label>
                                                    <input type="text" class="form-control  @error('durasi') is-invalid @enderror" name="durasi" value="{{ old('durasi', $magang->durasi) }}" required>
                                                    <div class="invalid-feedback ">Durasi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Deadline</label>
                                                    <input type="date" class="form-control date-picker  @error('deadline') is-invalid @enderror" data-date-format="dd-mm-yyyy" name="deadline" value="{{ old('deadline', $magang->deadline) }}" required>
                                                    <div class="invalid-feedback ">Deadline tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Pengumuman</label>
                                                    <input type="date" class="form-control date-picker  @error('pengumuman') is-invalid @enderror" data-date-format="dd-mm-yyyy" name="pengumuman" value="{{ old('pengumuman', $magang->pengumuman) }}" required>
                                                    <div class="invalid-feedback ">Pengumuman tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Mulai Magang</label>
                                                    <input type="date" class="form-control date-picker  @error('mulai_magang') is-invalid @enderror" data-date-format="dd-mm-yyyy" name="mulai_magang" value="{{ old('mulai_magang', $magang->mulai_magang) }}" required>
                                                    <div class="invalid-feedback ">Mulai magang tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label>Tipe</label>
                                                <select class="form-control select" name="tipe" style="width: 100%;">
                                                <option value="WFH" {{ old('tipe', $magang->tipe) == 'WFH' ? 'selected':'' }}>WFH</option>
                                                    <option value="WFO" {{ old('tipe', $magang->tipe) == 'WFO' ? 'selected':'' }}>WFO</option>
                                                    <option value="Hybrid" {{ old('tipe', $magang->tipe) == 'Hybrid' ? 'selected':'' }}>Hybrid</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col ">
                                                <div class="form-group col-md-12 ">
                                                    <label>Provinsi</label>
                                                    <input type="text" class="form-control  @error('provinsi') is-invalid @enderror" name="provinsi" value="{{ old('provinsi',  $magang->provinsi) }}" required>
                                                    <div class="invalid-feedback">Provinsi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Kota/Kabupaten</label>
                                                    <input type="text" class="form-control  @error('kabupaten') is-invalid @enderror" name="kabupaten" value="{{ old('kabupaten',  $magang->kabupaten) }}" required>
                                                    <div class="invalid-feedback">Kota/Kabupaten tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label>Sertifikat</label>
                                                <select class="form-control select2" name="sertifikat" style="width: 100%;">
                                                    <option value="iya" {{ old('sertifikat', $magang->sertifikat) == 'iya' ? 'selected':'' }}>iya</option>
                                                    <option value="tidak" {{ old('sertifikat', $magang->sertifikat) == 'tidak' ? 'selected':'' }}>tidak</option>
                                                </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Deskripsi(optional)</label>
                                                    <textarea class="form-control" rows="2" name="deskripsi" value="{{ old('deskripsi', $magang->deskripsi)}}">{{ $magang->deskripsi }}</textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label>Status</label>
                                                <input type="hidden" name="status" value="{{ old('status', $magang->status)}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-md-4 pt-md-1 border-top"> </div>
                                        <div class="form-group col-md-12 right">
                                            <input type="submit" class="btn btn-info btn-submit mr-2" value="Simpan" >
                                            <a href="{{ route('magang.tambah') }}" class="btn btn-secondary btn-reset">Batal</a>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
