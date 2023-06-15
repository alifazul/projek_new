<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;
    protected $table = 'magang';
    protected $fillable = [
        'user_id',
        'posisi',
        'perusahaan',
        'pendidikan',
        'tipe',
        'sertifikat',
        'durasi',
        'deadline',
        'pengumuman',
        'mulai_magang',
        'provinsi',
        'kabupaten',
        'link_daftar',
        'kontak',
        'deskripsi',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
