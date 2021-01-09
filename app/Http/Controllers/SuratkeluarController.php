<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    public function index()
    {
        return view('surat_keluar.index');
    }
}
