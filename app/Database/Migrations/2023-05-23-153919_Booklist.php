<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Booklist extends Migration
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
            'judul'          => [
                'type'           => 'VARCHAR',
                'constraint' => '100',
            ],
            'penulis'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'penerbit'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'rating'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'ulasan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ]
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('booklist');
    }

    public function down()
    {
        //menghapus tabel
        $this->forge->dropTable('booklist');
    }
}
