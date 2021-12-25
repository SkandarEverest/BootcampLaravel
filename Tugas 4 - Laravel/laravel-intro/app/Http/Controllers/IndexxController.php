<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexxController extends Controller
{
    public function home()
    {
        return view('halaman.index');
    }
}
