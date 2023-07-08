<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Interfaces\BooklistInterface;

class BooklistModel extends Model implements BooklistInterface {
    protected $table      = 'booklist';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [ 'id','judul','penulis', 'penerbit',  'rating', 'ulasan'];

    public function getData() {
        return $this->findAll();
    }

    public function saveData(array $data) {
        $this->insert($data);
    }

    public function updateData($id, array $data) {
        $this->update($id, $data);
    }

    public function deleteData($id) {
        $this->delete($id);
    }
}