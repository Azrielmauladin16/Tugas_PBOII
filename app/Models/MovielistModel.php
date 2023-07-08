<?php

namespace App\Models;

use CodeIgniter\Model;

class MovielistModel extends Model
{
    protected $table      = 'movielist';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [ 'id','judul','penulis', 'penerbit',  'rating', 'ulasan'];
}
