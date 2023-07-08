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
                'tugas' => 'Hitung Matrix',
                'atasan'  => 'Ayu Utami',
                'waktu_pengerjaan' => '10 jam',
                'deadline' => '10/10',
                'keterangan' => 'Selesai'
                
                
            ]
        ];

        foreach ($booklist_data as $data) {
            // insert semua data ke tabel
            $this->db->table('booklist')->insert($data);
        }
    }
}
