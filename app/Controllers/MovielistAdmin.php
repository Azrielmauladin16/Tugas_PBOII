<?php

namespace App\Controllers;

use \App\Models\MovielistModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use Dompdf\Dompdf;

class MovielistAdmin extends BaseController
{
    private $movielistModel;

    public function __construct()
    {
        $this->movielistModel = new MovielistModel();
    }

    public function index()
    {
        $data['movielist'] = $this->movielistModel->findAll();
        echo view('Movie_List/admin_list_movielist', $data);
    }

    public function create()
    {
        // Lakukan validasi
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

        // Jika data valid, simpan ke database
        if ($isDataValid) {
            $this->movielistModel->insert([
                "id" => $this->request->getPost('id'),
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "rating" => $this->request->getPost('rating'),
                "ulasan" => $this->request->getPost('ulasan')
            ]);
            return redirect('admin/movielist');
        }

        // Tampilkan form create
        echo view('Movie_List/admin_create_movielist');
    }

    public function edit($id)
    {
        // Ambil data movielist yang akan diedit
        $data['movielist'] = $this->movielistModel->find($id);

        // Lakukan validasi data
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

        // Jika data valid, simpan perubahan ke database
        if ($isDataValid) {
            $this->movielistModel->update($id, [
                "id" => $this->request->getPost('id'),
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "rating" => $this->request->getPost('rating'),
                "ulasan" => $this->request->getPost('ulasan')
            ]);
            return redirect('admin/movielist');
        }
       // Jika data tidak ditemukan, lempar pengecualian PageNotFoundException
       if (!$data['movielist']) {
        throw new PageNotFoundException('Data movielist tidak ditemukan.');
    }
        // Tampilkan form edit
        echo view('Movie_List/admin_edit_movielist', $data);
    }

    public function delete($id)
    {
        $this->movielistModel->delete($id);
        return redirect('admin/movielist');
    }

    public function generate()
    {
        $data['movielist'] = $this->movielistModel->findAll();
        $view = view('Movie_List/pdf_view_movielist', $data);
        
        $filename = ('Form Buku Tamu');

        // Instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // Load HTML content
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render HTML as PDF
        $dompdf->render();

        // Output the generated PDF
        $dompdf->stream($filename);
    }
}