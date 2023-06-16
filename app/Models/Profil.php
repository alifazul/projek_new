<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = [
        'id_user',
        'nama',
        'email',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'image'
    ];
}
