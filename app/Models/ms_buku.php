<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_buku extends Model
{
    use HasFactory;

    protected $table = 'ms_buku';
    protected $primarykey = 'kode_buku';

    protected $fillable = [
        'kode_buku',
        'kode_kategori',
        'kode_penerbit',
        'judul_buku',
        'jumlah_buku',
        'pengarang_buku',
        'tahun_terbit_buku'

    ];
}
