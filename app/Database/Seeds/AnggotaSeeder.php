<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     ['nama' => 'Falah',
        //     'alamat' => 'Jl. Raya No. 2',
        //     'hp' => '08123456789'],
        //     ['nama' => 'Arul',
        //     'alamat' => 'Jl. Raya No. 3',
        //     'hp' => '08123456789'],
        //     ['nama' => 'Rulfa',
        //     'alamat' => 'Jl. Raya No. 4',
        //     'hp' => '08123456789'],
        // ];
        
        // Gunakan faker untuk membuat data random
        // Buat perulangan data sebanyak 50 Biji
        
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 50; $i++) {
            $data = [
                'nama'      => $faker->name,
                'alamat'    => $faker->address,
                'hp'        => $faker->e164PhoneNumber
            ];
            // Eksekusi seed cara Pertama
            // $this->db->query("INSERT INTO anggota (nama, alamat, hp) VALUES (:nama:, :alamat:, :hp:)", $data);
            // Eksekusi seed cara Kedua
            $this->db->table('anggota')->insertBatch($data);
        }
    }
}
?>