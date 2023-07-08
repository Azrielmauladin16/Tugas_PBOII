<?php
namespace App\Interfaces;

interface BooklistInterface {
    public function getData();
    public function saveData(array $data);
    public function updateData($id, array $data);
    public function deleteData($id);
}