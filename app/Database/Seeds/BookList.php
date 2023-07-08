<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Booklist extends Seeder
{
    public function run()
    {
        // membuat data
        $booklist_data = [
            [
                'id' => '1',
                'judul' => 'Bilangan FU',
                'penulis'  => 'Ayu Utami',
                'penerbit' => 'Republika',
                'rating' => '10/10',
                'ulasan' => 'bagus sekali'
                
                
            ]
        ];

        foreach ($booklist_data as $data) {
            // insert semua data ke tabel
            $this->db->table('booklist')->insert($data);
        }
    }
}
