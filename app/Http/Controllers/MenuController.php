<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MenuController extends Controller
{
    public function home()
    {
        return view('beranda');
    }

    public function info_kegiatan()
    {
        return view('info');
    }

    public function data_siswa()
    {
        $datasiswa = User::get();

        return view('siswa', compact('datasiswa'));
    }
}
