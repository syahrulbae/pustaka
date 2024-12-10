<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model {
    protected $table = 'buku';
    protected $primarykey = 'id_buku';
    protected $allowedFields = ['judul', 'pengarang', 'penerbit', 'tahun_terbit', 'sampul'];
    public function getBuku($idBuku = false){
        if($idBuku == false){
            return $this->findAll();
        }
        return $this->where(['id_buku' => $idBuku])->first();
    }
}