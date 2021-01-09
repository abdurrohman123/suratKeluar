<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratBalasanController extends Controller
{
   public function index()
   {
       return view('surat_balasan.index');
   }
}
