<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $kelasModel;
    protected $helpers=['form'];

    public function __construct(){
        $this->kelasModel=new KelasModel();
    }
    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(),
        ];

        return view('list_kelas', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create Kelas',
            'kelas' => $kelas,
        ];

        return view('create_kelas', $data);
    }

    public function store()
    {
        if (
            !$this->validate([
                'nama_kelas' => [
                    'rules' => 'required|is_unique[kelas.nama_kelas]',
                    'errors' => [
                        'required' => 'Nama Kelas Harus Diisi !',
                        'is_unique' => 'Nama Kelas Sudah Ada !'
                    ]
                ],
            ])
        ) {
            session()->setFlashdata($this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ]);

        return redirect()->to('/kelas');
    }

    public function edit($id)
    {
        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
        ];

        return view('edit_kelas', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ];

        $result = $this->kelasModel->updateKelas($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to('/kelas');
    }

    public function destroy($id)
    {
        $result = $this->kelasModel->deleteKelas($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/kelas'))
            ->with('succes', 'Berhasil Menyimpan Data');
    }
}
