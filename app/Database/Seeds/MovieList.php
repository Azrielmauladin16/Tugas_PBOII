<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Movielist extends Seeder
{
    public function run()
    {
        // membuat data
        $movielist_data = [
            [
                'id' => '1',
                'judul' => 'Bilangan FU',
                'penulis'  => 'Ayu Utami',
                'penerbit' => 'Republika',
                'rating' => '10/10',
                'ulasan' => 'bagus sekali'
                
                
            ]
        ];

        foreach ($movielist_data as $data) {
            // insert semua data ke tabel
            $this->db->table('movielist')->insert($data);
        }
    }
}
