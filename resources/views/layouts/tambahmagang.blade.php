@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Kirim Info Magang
                </div>

                <div class="card-body">
                    <form class="needs-validation" action="{{ route('magang.simpan') }}" method="post" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="hidden" name="id_user" value="{{ $user_id }}">
                                <div class="form-group col-md-12">
                                    <label>Posisi</label>
                                    <input type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ old('posisi') }}" required>
                                    <div class="invalid-feedback">Posisi tidak boleh kosong.</div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Nama Perusahaan</label>
                                    <input type="text" class="form-control @error('perusahaan') is-invalid @enderror" name="perusahaan" value="{{ old('perusahaan') }}" required>
                                    <div class="invalid-feedback">Nama Perusahaan tidak boleh kosong.</div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Kontak Perusahaan</label>
                                    <input type="text" class="form-control  @error('kontak') is-invalid @enderror" name="kontak" value="{{ old('kontak') }}" required>
                                    <div class="invalid-feedback">Kontak tidak boleh kosong.</div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Jenjang Pendidikan</label>
                                    <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan') }}" required>
                                    <div class="invalid-feedback">Jenjang Pendidikan tidak boleh kosong.</div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Link Pendaftaran</label>
                                    <input type="text" class="form-control @error('link_daftar') is-invalid @enderror" name="link_daftar" value="{{ old('link_daftar') }}" required>
                                    <div class="invalid-feedback">Link Pendaftaran tidak boleh kosong.</div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="form-group col-md-12 ">
                                    <label>Durasi Magang</label>
                                    <input type="text" class="form-control @error('durasi') is-invalid @enderror" name="durasi" value="{{ old('durasi') }}" required>
                                    <div class="invalid-feedback ">Durasi tidak boleh kosong.</div>
                                </div>
                                <div class="form-group col-md-12 ">
                                    <label>Deadline</label>
                                    <input type="date" class="form-control date-picker @error('deadline') is-invalid @enderror" data-date-format="dd-mm-yyyy" name="deadline" value="{{ old('deadline') }}" required>
                                    <div class="invalid-feedback ">Deadline tidak boleh kosong.</div>
                                </div>
                                <div class="form-group col-md-12 ">
                                    <label>Pengumuman</label>
                                    <input type="date" class="form-control date-picker @error('pengumuman') is-invalid @enderror" data-date-format="dd-mm-yyyy" name="pengumuman" value="{{ old('pengumuman') }}" required>
                                    <div class="invalid-feedback ">Pengumuman tidak boleh kosong.</div>
                                </div>
                                <div class="form-group col-md-12 ">
                                    <label>Mulai Magang</label>
                                    <input type="date" class="form-control date-picker @error('mulai_magang') is-invalid @enderror" data-date-format="dd-mm-yyyy" name="mulai_magang" value="{{ old('mulai_magang') }}" required>
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
                                    <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{ old('provinsi') }}" required>
                                    <div class="invalid-feedback">Provinsi tidak boleh kosong.</div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Kota/Kabupaten</label>
                                    <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" name="kabupaten" value="{{ old('kabupaten') }}" required>
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
                            <input type="submit" class="btn btn-info btn-submit mr-2" value="Kirim">
                            <a href="{{ route('home') }}" class="btn btn-secondary btn-reset">Batal</a>
                        </div>
                    </form>
                </div>

            </div>
            <br>
            <br>
            <div class="card">
                <div class="card-header">
                    Post Magang
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Posisi</th>
                                    <th>Perusahaan</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($magang as $a)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $a->posisi }}</td>
                                    <td>{{ $a->perusahaan }}</td>
                                   
                                    <td>{{ $a->created_at }}</td>
                                    <td>{{ $a->updated_at }}</td>
                                    <td><?php if ($a->status == 'publish') {
                                            echo "<span class='badge badge-info'>$a->status</span>";
                                        } else if ($a->status == 'pending') {
                                            echo "<span class='badge badge-warning'>$a->status</span>";
                                        } else if ($a->status == 'draft') {
                                            echo "<span class='badge badge-success'>$a->status</span>";
                                        } else if ($a->status == 'rejected') {
                                            echo "<span class='badge badge-danger'>$a->status</span>";
                                        }
                                        ?></td>
                                    <td class="text-center">
                                        <a href="{{ route('magang.ubah', $a->id) }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-edit"></i>Edit</a>
                                        @method('DELETE')
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('magang.hapus', $a->id) }}" method="GET">
                                            <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
