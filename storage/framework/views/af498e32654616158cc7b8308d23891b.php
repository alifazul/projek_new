      
<?php $title='Edit Pengguna'?>

<?php $__env->startSection('aturform'); ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php $__env->stopSection(); ?>
<?php $header='Detail Magang' ?>                
                    
<?php $__env->startSection('content'); ?> 
<table>
    <tr>
        <th>ID</th>
        <td><?php echo e($data_magang->id); ?></td>
    </tr>
    <tr>
        <th>Posisi</th>
        <td><?php echo e($data_magang->posisi); ?></td>
    </tr>
    <tr>
        <th>Perusahaan</th>
        <td><?php echo e($data_magang->perusahaan); ?></td>
    </tr>
    <tr>
        <th>Pendidikan</th>
        <td><?php echo e($data_magang->pendidikan); ?></td>
    </tr>
    <tr>
    <tr>
        <th>Lokasi</th>
        <td><?php echo e($data_magang->provinsi); ?>, <?php echo e($data_magang->kabupaten); ?></td>
    </tr>
        <th>Tipe</th>
        <td><?php echo e($data_magang->tipe); ?></td>
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
        <td><?php echo e($data_magang->durasi); ?></td>
    </tr>
    <tr>
        <th>Deadline</th>
        <td><?php echo e($data_magang->deadline); ?></td>
    </tr>
    <tr>
        <th>Pengumuman</th>
        <td><?php echo e($data_magang->pengumuman); ?></td>
    </tr>
    <tr>
        <th>Mulai Magang</th>
        <td><?php echo e($data_magang->mulai_magang); ?></td>
    </tr>
    <tr>
        <th>Deskripsi</th>
        <td><?php echo e($data_magang->deskripsi); ?></td>
    </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projek_new\resources\views/admin/detail_magang.blade.php ENDPATH**/ ?>