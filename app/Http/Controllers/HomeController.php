<?php

namespace App\Http\Controllers;

use App\Models\Pelaminan;
use App\Models\Baju;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data dari model Pelaminan dan Baju
        $pelaminans = Pelaminan::all();
        $bajus = Baju::all();

        // Kirim data ke view home
        return view('home', compact('pelaminans', 'bajus'));
    }
}
