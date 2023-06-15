@extends('admin.template')      
<?php $title='Edit Pengguna'?>

@section('aturform')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
<?php $header='Detail Magang' ?>                
                    
@section('content') 
<table>
    <tr>
        <th>ID</th>
        <td>{{ $data_magang->id }}</td>
    </tr>
    <tr>
        <th>Posisi</th>
        <td>{{ $data_magang->posisi }}</td>
    </tr>
    <tr>
        <th>Perusahaan</th>
        <td>{{ $data_magang->perusahaan }}</td>
    </tr>
    <tr>
        <th>Pendidikan</th>
        <td>{{ $data_magang->pendidikan }}</td>
    </tr>
    <tr>
    <tr>
        <th>Lokasi</th>
        <td>{{ $data_magang->provinsi }}, {{ $data_magang->kabupaten }}</td>
    </tr>
        <th>Tipe</th>
        <td>{{ $data_magang->tipe }}</td>
    </tr>
    <tr>
        <th>Sertifikat</th>
        <td><?php if($data_magang->sertifikat=='iya') {
            echo "Bersertifikat";
        }else{
            echo "-";
        }; ?></td>
    </tr>
    <tr>
        <th>Durasi</th>
        <td>{{ $data_magang->durasi }}</td>
    </tr>
    <tr>
        <th>Deadline</th>
        <td>{{ $data_magang->deadline }}</td>
    </tr>
    <tr>
        <th>Pengumuman</th>
        <td>{{ $data_magang->pengumuman }}</td>
    </tr>
    <tr>
        <th>Mulai Magang</th>
        <td>{{ $data_magang->mulai_magang }}</td>
    </tr>
    <tr>
        <th>Deskripsi</th>
        <td>{{ $data_magang->deskripsi }}</td>
    </tr>
</table>
@endsection