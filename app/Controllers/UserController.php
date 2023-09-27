<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        //
    }
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            // 'kelas' itu adlh key, dan 'B' adala value 
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }

    public function create()
    {
        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C'
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D'
            ],
        ];

        $data = [
            'kelas' => $kelas
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        $userModel = new UserModel();

        if (!$this->validate([
                'nama' => [
                    'rules' => 'required|alpha_space',
                    'errors' => [
                        'required' => 'Nama Harus Diisi !',
                        'alpha_space' => 'Nama Harus Diisi Huruf dan Spasi'
                    ]
                ],
                'npm' => [
                    'rules' => 'required|is_unique[user.npm]',
                    'errors' => [
                        'required' => 'NPM Harus Diisi !',
                        'is_unique' => 'NPM Sudah Terdaftar !'
                    ]
                ],
                'kelas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelas Harus Dipilih !'
                    ]
                ]
        ])) {
            session()->setFlashdata($this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];

        return view('profile', $data);
    }
}