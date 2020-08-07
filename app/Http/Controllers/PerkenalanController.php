<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkenalanController extends Controller
{
    //
    public function halo($nama_depan, $nama_belakang) {
        $nama_lengkap = "$nama_depan $nama_belakang";

        return view('perkenalan', compact('nama_lengkap'));
    }

    public function form () {
        return view('form');
    }

    public function selamat_datang(Request $request) {
        // dd($request->all());
        $email = $request["email"];
        return view('setelah-login', ["surel" => $email]);
    }
}
