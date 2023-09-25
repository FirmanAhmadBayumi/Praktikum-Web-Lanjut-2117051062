<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'npm', 'id_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
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
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveUser($data){
        $this->insert($data);
    }
}
