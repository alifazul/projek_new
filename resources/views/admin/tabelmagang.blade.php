@extends('admin.template')
<?php $title='Data Magang';
$header='Data Magang'; ?>

@section('tomboltambah')
<a href="{{ route('magang.create') }}" class="d-none d-sm-inline-block btn btn-lg btn-success shadow-sm">Tambah</a>
@endsection
<!-- DataTales Example -->
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Magang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Posisi</th>
                        <th>Perusahaan</th>
                        <th>User ID</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                @foreach($magang as $a)
                    <tr>
                        
                        <td>{{ $no }}</td>
                        <td>{{ $a->posisi }}</td>
                        <td>{{ $a->perusahaan }}</td>
                        <td>{{ $a->user_id }}</td>
                        <td>{{ $a->created_at }}</td>
                        <td>{{ $a->updated_at }}</td>
                        <td><?php if($a->status=='publish'){
                            echo "<span class='badge badge-info'>$a->status</span>";
                        }else if($a->status=='pending'){
                            echo "<span class='badge badge-warning'>$a->status</span>";
                        }else if($a->status=='draft'){
                            echo "<span class='badge badge-success'>$a->status</span>";
                        }
                        else if($a->status=='rejected'){
                            echo "<span class='badge badge-danger'>$a->status</span>";
                        }
                            ?></td>
                        <td class="text-center">
                        <a href="{{ route('magang.show', $a->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-info-circle"></i>View</button>
                            <a href="{{ route('magang.edit', $a->id) }}" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i>Edit</a>
                            @method('DELETE')
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('magang.destroy', $a->id) }}" method="GET">
                                <button type="submit" class="btn btn-sm btn-danger">                     <i class="fas fa-trash"></i>Delete</button>
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
@endsection