<?php

namespace App\Http\Controllers;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda'); // Menampilkan file view 'beranda.blade.php'
    }
}
