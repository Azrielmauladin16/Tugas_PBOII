<?php
namespace App\Controllers;

use \App\Interfaces\BooklistInterface;
use CodeIgniter\Exceptions\PageNotFoundException;
use Dompdf\Dompdf;

class BooklistAdmin extends BaseController {
    private $booklistModel;

    public function __construct(BooklistInterface $booklistModel) {
        $this->booklistModel = $booklistModel;
    }

    public function index() {
        $data['booklist'] = $this->booklistModel->getData();
        echo view('Book_List/admin_list_booklist', $data);
    }

    public function create() {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'rating' => 'required',
            'ulasan' => 'required'
            
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid) {
            $this->booklistModel->saveData([
                "id" => $this->request->getPost('id'),
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "rating" => $this->request->getPost('rating'),
                "ulasan" => $this->request->getPost('ulasan')
            ]);
            return redirect('admin/booklist');
        }
        echo view('Movie_List/admin_create_movielist');
    }

    public function edit($id) {
        $movielist2 = new MovielistModel();
        $data['movielist'] = $movielist2->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'rating' => 'required',
            'ulasan' => 'required'
            
        ]);

        if ($isDataValid) {
            $this->booklistModel->updateData($id, [
                "id" => $this->request->getPost('id'),
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "rating" => $this->request->getPost('rating'),
                "ulasan" => $this->request->getPost('ulasan')
            ]);
            return redirect('admin/booklist');
        }
        echo view('Movie_List/admin_edit_movielist', $data);
    }

    public function delete($id) {
        $this->booklistModel->deleteData($id);
        return redirect('admin/booklist');
    }

    
}