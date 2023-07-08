<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table      = 'product';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['country', 'order_method_type', 'retailer_type', 'product_line', 'item_type', 'product', 'year', 'quarter', 'total_revenue', 'units_sold','unit_cost','gross_margin','total_profit'];
}
