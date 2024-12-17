<?php
namespace App\Controllers;
use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    protected $AnggotaModel;

    public function __construct()
    {
        $this->AnggotaModel = new AnggotaModel();
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_anggota') ? $this->request->getVar('page_anggota') : 1;
        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $anggota = $this->AnggotaModel->searchAnggota($keyword);
        } else {
            $anggota = $this->AnggotaModel;
        }
        $data = [
            'title' => 'daftar anggota',
            'active' => 'anggota',
            'anggota'=> $anggota->paginate(6, 'anggota'),
            'pager' => $this->AnggotaModel->pager,
            'currentPage' => $currentPage
        ];
        return view('anggota/index', $data);
    }
}