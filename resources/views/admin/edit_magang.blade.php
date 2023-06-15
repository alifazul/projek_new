@extends('admin.template')

<?php $title='Edit Magang'?>


<?php $header='Edit Magang' ?>                
                    
@section('content')                                 
                    <div class="row">
                        <div class="col-md-12">


                            <div class="card">
                                <div class="card-body">
                                    <!--  -->
                                    
                                    <form class="needs-validation" action="{{ route('magang.update', $magang->id) }}" method="post" enctype="multipart/form-data" novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                            <div class="col">
                                            <input type="hidden" name="id_user" value="{{ old('id_user', $magang->user_id) }}">
                                                <div class="form-group col-md-12">
                                                    <label>Posisi</label>
                                                    <input type="text" class="form-control" name="posisi" value="{{ old('posisi', $magang->posisi) }}" required>
                                                    <div class="invalid-feedback">Posisi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Nama Perusahaan</label>
                                                    <input type="text" class="form-control" name="perusahaan" value="{{ old('perusahaan', $magang->perusahaan) }}" required>
                                                    <div class="invalid-feedback">Nama Perusahaan tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Jenjang Pendidikan</label>
                                                    <input type="text" class="form-control" name="pendidikan" value="{{ old('pendidikan',  $magang->pendidikan) }}" required>
                                                    <div class="invalid-feedback">Jenjang Pendidikan tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label>Tipe</label>
                                                <select class="form-control select2" name="tipe" style="width: 100%;">
                                                    <option value="WFH">WFH</option>
                                                    <option value="WFO">WFO</option>
                                                    <option value="Hybrid">Hybrid</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group col-md-12 ">
                                                    <label>Durasi Magang</label>
                                                    <input type="text" class="form-control" name="durasi" value="{{ old('durasi',  $magang->durasi) }}" required>
                                                    <div class="invalid-feedback ">Durasi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Deadline</label>
                                                    <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="deadline" value="{{ old('deadline',  $magang->deadline) }}" required>
                                                    <div class="invalid-feedback ">Deadline tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Pengumuman</label>
                                                    <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="pengumuman" value="{{ old('pengumuman', $magang->pengumuman) }}" required>
                                                    <div class="invalid-feedback ">Pengumuman tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12 ">
                                                    <label>Mulai Magang</label>
                                                    <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="mulai_magang" value="{{ old('mulai_magang', $magang->mulai_magang) }}" required>
                                                    <div class="invalid-feedback ">Mulai magang tidak boleh kosong.</div>
                                                </div>
                                            </div>
                                            <div class="col ">
                                                <div class="form-group col-md-12 ">
                                                    <label>Provinsi</label>
                                                    <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi',  $magang->provinsi) }}" required>
                                                    <div class="invalid-feedback">Provinsi tidak boleh kosong.</div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Kota/Kabupaten</label>
                                                    <input type="text" class="form-control" name="kabupaten" value="{{ old('kabupaten',  $magang->kabupaten) }}" required>
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
                                                    <textarea class="form-control" rows="2" name="deskripsi" value="{{ old('deskripsi', $magang->deskripsi)}}">{{ $magang->deskripsi }}</textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label>Status</label>
                                                <select class="form-control select" name="status" style="width: 100%;">
                                                <option value="publish" {{ old('status', $magang->status) == 'publish' ? 'selected':'' }} >Publish</option>  
                                                <option value="draft" {{ old('status', $magang->status) == 'draft' ? 'selected':'' }} >Draft</option>  
                                                <option value="pending" {{ old('status', $magang->status) == 'pending' ? 'selected':'' }} >Pending</option>  
                                                <option value="rejected" {{ old('status', $magang->status) == 'rejected' ? 'selected':'' }} >Rejected</option>  
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-md-4 pt-md-1 border-top"> </div>
                                        <div class="form-group col-md-12 right">
                                            <input type="submit" class="btn btn-info btn-submit mr-2" value="simpan" >
                                            <a href="{{ route('magang.index') }}" class="btn btn-secondary btn-reset">Batal</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection