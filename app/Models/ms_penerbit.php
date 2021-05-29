<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_penerbit extends Model
{
    use HasFactory;
    protected $table = 'ms_penerbit';
    protected $primaryKey = 'kode_penerbit';

    protected $fillable = [
        'kode_penerbit',
        'nama_penerbit',
        'alamat_penerbit',
        'tep_penerbit'
    ];
}
