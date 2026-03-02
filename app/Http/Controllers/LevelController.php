<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel m_level
        $data = DB::select('select * from m_level');

        // Mengirim data ke view 'level'
        return view('level', ['data' => $data]);
    }
}
