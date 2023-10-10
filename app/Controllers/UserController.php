<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $helpers = ['form'];
    public $kelasModel;
    public $userModel;
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }
    public function __construct()
    {
        $this->kelasModel = new KelasModel();
        $this->userModel = new UserModel();
    }
    public function create()
    {
        $kelasModel = new KelasModel();

        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        // $userModel = new UserModel();

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

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

        if ($foto->move($path, $name)) {
            $foto = base_url($path . $name);
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'foto' => $foto
        ]);

        // $data = [
        //     'title' => 'Profile',
        //     'nama' => $this->request->getVar('nama'),
        //     'kelas' => $this->request->getVar('kelas'),
        //     'npm' => $this->request->getVar('npm'),
        // ];

        return redirect()->to('/user');
    }

    public function show($id)
    {
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];

        return view('profile', $data);
    }
}