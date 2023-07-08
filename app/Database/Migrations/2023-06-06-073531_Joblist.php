<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Joblist extends Migration
{
    public function up()
    {
        //mebuat database
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'tugas'          => [
                'type'           => 'VARCHAR',
                'constraint' => '100',
            ],
            'atasan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'waktu_pengerjaan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'deadline'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'keterangan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ]
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('joblist');
    }

    public function down()
    {
        //menghapus tabel
        $this->forge->dropTable('joblist');
    }
}
