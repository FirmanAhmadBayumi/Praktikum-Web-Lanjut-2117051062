<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        // $data = [
        //     // 'kelas' itu adlh key, dan 'B' adala value 
        //     'nama' => 'Firman Ahmad Bayumi',
        //     'kelas' => 'B',
        //     'npm' => '2117051062',
        //     'matkul'=> 'Pemrograman Web Lanjut',
        // ];
        // return view('profile', $data);

        $data = [
            // 'kelas' itu adlh key, dan 'B' adala value 
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }
}