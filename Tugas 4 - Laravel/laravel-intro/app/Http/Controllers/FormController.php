<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function biodata()
    {
        return view('halaman. biodata');
    }

    public function kirim(Request $request)
    {
        dd($request->all());
        $nama = $request['nama'];
        $alamat = $request['address'];

        return view('halaman.home', compact('nama', 'alamat'));
    }
}
