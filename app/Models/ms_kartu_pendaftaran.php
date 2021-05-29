<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_kartu_pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'ms_kartu_pendaftaran';
    protected $primarykey = 'kode_kartu';

    protected $fillable = [
        'kode_kartu',
        'kode_petugas',
        'kode_peminjam',
        'tgl_pembuatan',
        'tgl_akhir',
        'status_aktif'
    ];
}
