<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'perpustakaan_penulis';
    protected $primaryKey = "kd_penulis";

    protected $fillable = [
        'nama_penulis','tempat_lahir','tgl_lahir','email'
    ];
}
