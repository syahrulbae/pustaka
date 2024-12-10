<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pemprograman Website 2',
            'judul' => 'Website Simpel',
            'heading' => 'Halo Dunia!',
            'deskripsi' => 'MVC merupakan sebuah pola desain arsitektur yang umum digunakan dalam pengembangan aplikasi. Tujuanya agar kode program lebih konsisten dan tersetruktur.',
            'active' => 'home',
        ];
        return view('pages/home', $data);
    }

    // Menu About
    public function about()
    {
        $data = [
            'title' => 'Pemprograman Website 2',
            'judul' => 'Website Simpel',
            'heading' => 'Muhammad Syahrul Falah',
            'deskripsi' => 'Saya seorang yang sedang aktif mengembangkan proyek berbasis CodeIgniter 4 untuk mengelola organisasi dan anggotanya, dengan fokus pada berbagai fitur kompleks seperti manajemen event, role-based access, dan sistem penjualan tiket.<br>Selain itu, saya juga sedang menempuh pendidikan di Institut Widya Pratama Kota Pekalongan dengan prodi Teknik Informatika.<br>Di sisi personal, saya tidak memandang teman entah dia dari kalangan mana.',
            'active' => 'about',
        ];
        return view('pages/about', $data);
    }

    // Menu Contact
    public function contact()
    {
        $data = [
            'title' => 'Pemprograman Website 2',
            'judul' => 'Website Simpel',
            'heading' => 'Hubungi Saya',
            'nama' => 'Muhammad Syahrul Falah',
            'hp' => '+62 8521-3320-894',
            'alamat' => 'Kradenan Gang 4, Kel. Buaran Kradenan, Kec. Pekalongan Selatan.',
            'active' => 'contact',
        ];
        return view('pages/contact', $data);
    }
}
