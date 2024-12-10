<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Anggota extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_anggota' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'autoincrement' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'hp' => [
                'type' => 'VARCHAR',
                'constraint' => '13',
            ]
        ]);
        $this->forge->addKey('id_anggota', true);
        $this->forge->createTable('anggota');
    }

    public function down()
    {
        //
        $this->forge->dropTable('anggota');
    }
}
