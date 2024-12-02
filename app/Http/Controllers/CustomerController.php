<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // public function __construct()
    // {
    //     // Pastikan hanya customer yang bisa mengakses
    //     $this->middleware('customer');
    // }

    public function index()
    {
        // Menampilkan tampilan dashboard customer
        return view('customer.dashboard');
    }
}

