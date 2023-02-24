<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        $data['title'] = 'Beranda';
        return view('beranda', $data);
    }
    public function info_kegiatan()
    {
        $data['title'] = 'Info Akademik';
        return view('info', $data);
    }
    public function data_siswa()
    {
        $data['title'] = 'Data Siswa';
        return view('siswa', $data);
    }
    public function login()
    {
        $data['title'] = 'Login';
        return view('auth/login', $data);
    }
}
