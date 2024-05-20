<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'perpustakaan_buku';
    protected $primaryKey = "no_buku";

    protected $fillable = [
        'judul','edisi','tahun','penerbit'
    ];
}
