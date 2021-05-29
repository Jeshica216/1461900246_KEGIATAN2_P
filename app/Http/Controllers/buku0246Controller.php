<?php

namespace App\Http\Controllers;

use App\Models\ms_buku;
use App\Models\ms_detail_pinjam;
use App\Models\ms_peminjaman;
use App\Models\ms_kategori;
use Illuminate\Http\Request;

class buku0230Controller extends Controller{
    public function buku0246(){
        $term = "ia";
        $ms_buku = ms_buku::all(); //select all
        $peminjam = ms_detail_pinjam::join('ms_detail_pinjam','ms_peminjaman.kode_peminjaman','=','ms_detail_pinjam.kode_peminjaman')->get(); //join saja
        $where = ms_buku::where('judul_buku','LIKE','%'.$term.'%')->get();
        $joinwhere = ms_detail_pinjam::join('ms_peminjaman','ms_peminjaman.kode_peminjaman','=','ms_detail_pinjam.kode_peminjaman'),-> where('ms_peminjaman.kode_peminjaman','=','HTML & CSS')->get();
        //
        return view('buku0230',[
            'ms_buku' => $ms_buku,
            'peminjam'=>$peminjam,
            'where' =>$where,
            'joinwhere' =>$joinwhere
        ]);
    }
}