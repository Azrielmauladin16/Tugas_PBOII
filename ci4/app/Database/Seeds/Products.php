<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Products extends Seeder
{
    public function run()
    {
        // membuat data
        $product_data = [
            [
                'id' => 1,
                'country' => 'United States',
                'order_method_type'  => 'Fax',
                'retailer_type' => 'Outdoors Shop',
                'product_line' => 'Camping Equipment',
                'item_type'  => 'Cooking Gear',
                'product' => 'TrailChef Deluxe Cook Set',
                'year' => '2012',
                'quarter'  => 'Q1 2012',
                'total_revenue' => '59628.66',
                'units_sold' => '489',
                'unit_cost' => '121.94',
                'gross_margin' => '0.34754797',
                'total_profit' => '-18233.4345'
            ]
        ];

        foreach ($product_data as $data) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($data);
        }
    }
}
