<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'name',
        'password',
        'image',
        'nis',
        'tingkatan',
        'jurusan',
        'kelas',
        'hp',
        'status'
    ];
}
