<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel; // Pastikan ini sudah di-import
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // Mengambil semua data kategori menggunakan Eloquent
        $data = KategoriModel::all();

        // Memanggil view 'kategori' dan mengirimkan variabel $data
        return view('kategori', ['data' => $data]);
    }
}