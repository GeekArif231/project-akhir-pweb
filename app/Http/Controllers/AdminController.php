<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // Pastikan hanya admin yang bisa mengakses
        $this->middleware('admin');
    }

    public function index()
    {
        // Menampilkan tampilan dashboard admin
        return view('admin.dashboard');
    }
}

