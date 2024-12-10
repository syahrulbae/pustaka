<?php

namespace App\Controllers;
use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $BukuModel;

    public function __construct()
    {
        $this->BukuModel = new BukuModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->BukuModel->getBuku(),
            'active' => 'buku',
        ];
        return view('buku/index', $data);
    }
    public function detail($idBuku)
    {
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->BukuModel->getBuku($idBuku),
            'active' => 'buku',
        ];
        return view('buku/detail', $data);
    }
    public function tambah()
    {
        // mengambil data input
        session();
        $data = [
            'title' => 'Tambah Buku',
            'active' => 'buku',
            'validate' => (null !== $this->validator->getErrors()) ? "" : $this->validator->getErrors()
        ];
        return view('buku/tambah', $data);
    }
    public function simpan()
    {
        // Validasi
        if (
            !$this->validate([
                'judul' => [
                    'rules' => 'required|is_unique[buku.judul]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah ada',
                    ]
                ],
                'pengarang' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
                'penerbit' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
                'tahun_terbit' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'integer' => '{field} harus berupa angka',
                    ]
                ],
                'sampul' => [
                    'rules' => 'uploaded[sampul]|max_size[sampul,2024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => '{field} belum diupload',
                        'max_size' => '{field} tidak boleh lebih dari 2024 KB',
                        'is_image' => '{field} harus berupa gambar',
                        'mime_in' => '{field} harus berupa file dengan format jpg, jpeg, atau png',
                    ]
                ]
            ])
        ) {

            // $validation = \Config\Services::validation();
            $validate = $this->validator->getErrors();
            // dd($validation->getErrors()['sampul']); // Tambahkan ini untuk melihat kesalahan
            // Debugging: Tampilkan data input dan kesalahan validasi
            // dd($validate);
            // exit;
            // Redirect ke halaman tambah dengan input sebelumnya dan validasi
            return redirect()->back()->withInput()->with('validate', $validate);
        }

        // Mengambil gambar sampul
        $fileSampul = $this->request->getFile('sampul');
        // Generate nama gambar
        $namaSampul = $fileSampul->getRandomName();
        // Pindahkan gambar ke folder Sampul
        $fileSampul->move('img', $namaSampul);
        // Simpan data ke model
        $this->BukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'sampul' => $namaSampul
        ]);

        // Notifikasi Flash Data
        session()->setFlashdata('pesan', 'Data sudah berhasil ditambahkan.');
        return redirect()->to('buku');
    }
    public function hapus($idBuku)
    {
        $this->BukuModel->where('id_buku', $idBuku)->delete();
        // Flash data pesan
        session()->setFlashdata('pesan', 'Data Sudah dihapus!');
        return redirect()->to('buku');
    }
    public function ubah($idBuku)
    {
        // Mengambil data untuk divalidasi
        session();
        $data = [
            'title' => 'Ubah data Buku',
            'validation' => \Config\Services::validation(),
            'buku' => $this->BukuModel->getBuku($idBuku),
            'active' => 'buku'
        ];
        return view('buku/ubah', $data);
    }
    public function update($idBuku)
    {
        // Validasi
        if (
            !$this->validate([
                'judul' => [
                    'rules' => 'required|is_unique[buku.judul]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} mohon diganti yang lain',
                    ]
                ],
                'pengarang' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
                'penerbit' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi',
                    ]
                ],
                'tahun_terbit' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'integer' => '{field} harus berupa angka',
                    ]
                ],
                'sampul' => [
                    'rules' => 'uploaded[sampul]|max_size[sampul,2024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => '{field} belum diupload',
                        'max_size' => '{field} tidak boleh lebih dari 2024 KB',
                        'is_image' => '{field} harus berupa gambar',
                        'mime_in' => '{field} harus berupa file dengan format jpg, jpeg, atau png',
                    ]
                ]
            ])
        ) {

            $validation = \Config\Services::validation();
            // Debugging: Tampilkan data input dan kesalahan validasi
            // dd($validation);
            // Redirect ke halaman tambah dengan input sebelumnya dan validasi
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->BukuModel->where('id_buku', $idBuku)->set([
            'id_buku' => $idBuku,
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'sampul' => $this->request->getVar('sampul')
        ])->update();

        // Notifikasi Flash
        session()->setFlashdata('pesan', 'Data buku berhasil dirubah!');
        return redirect()->to('buku');
    }
}