<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
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
            'country'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'order_method_type'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'retailer_type'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'product_line' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'item_type' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'product' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'year'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'quarter'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'total_revenue'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'units_sold' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'unit_cost' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'gross_margin' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'total_profit' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ]
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        //menghapus tabel
        $this->forge->dropTable('product');
    }
}
