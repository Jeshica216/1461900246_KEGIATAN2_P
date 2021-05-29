<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_detail_pinjam extends Model
{
    use HasFactory;

    protected $table = 'ms_detail_pinjam';
    protected $primarykey = 'kode_peminjaman';

    protected $fillable = [
        'kode_peminjaman',
        'kode_buku',
        'tgl_kembali',
        'denda',
        'status_kembali',

    ];
}
