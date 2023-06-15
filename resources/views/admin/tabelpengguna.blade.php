@extends('admin.template')

<?php $title='Data Pengguna';
$header='Data Pengguna'; ?>

@section('tomboltambah')
<a href="#" class="d-none d-sm-inline-block btn btn-lg btn-success shadow-sm">Tambah</a>
@endsection
<!-- DataTales Example -->
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            
                            <a href="{{ route('pengguna.edit', $a->id) }}" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i>Edit</a>
                            @method('DELETE')
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('magang.destroy', $a->id) }}" method="POST">
                                <button type="submit" class="btn btn-sm btn-danger">                     <i class="fas fa-trash"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection