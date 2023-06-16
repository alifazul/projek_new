@extends('admin.template')

<?php $title='Data Pengguna';
$header='Data Pengguna'; 
$no=1;?>
@section('datatable')
 <!-- Custom styles for this page -->
 <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
 @endsection

@section('tomboltambah')
<a href="{{ route('user.create') }}" class="d-none d-sm-inline-block btn btn-lg btn-success shadow-sm">Tambah</a>
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
                        
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pengguna as $a)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $a->nama }}</td>
                        <td>{{ $a->email }}</td>
                        <td>{{ $a->no_hp }}</td>
                        <td class="text-center">
                            
                            <a href="{{ route('user.edit', $a->id) }}" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i>Edit</a>
                            @method('DELETE')
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $a->id) }}" method="GET">
                                <button type="submit" class="btn btn-sm btn-danger">                     <i class="fas fa-trash"></i>Delete</button>
                            </form>
                        </td>
                        <?php $no++; ?>
                       
                    </tr>
                    @endforeach
                   
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('tabelj')
<!-- Page level plugins -->
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
@endsection
