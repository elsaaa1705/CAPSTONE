<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notifikasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $angka = 1;
        // dd($angka);
        return view('dashboard/dashboard', ['angka' => $angka]);

    }
}
