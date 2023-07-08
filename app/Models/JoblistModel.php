<?php

namespace App\Models;

use CodeIgniter\Model;

class JoblistModel extends Model
{
    protected $table      = 'joblist';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [ 'id','judul','penulis', 'penerbit',  'rating', 'ulasan'];
}
