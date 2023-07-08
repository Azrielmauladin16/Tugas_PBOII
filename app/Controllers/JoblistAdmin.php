<?php

namespace App\Controllers;

use \App\Models\JoblistModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use Dompdf\Dompdf;

class JoblistAdmin extends BaseController
{
    public function index()
    {
        $joblist2 = new JoblistModel();
        $data['joblist'] = $joblist2->findAll();
        echo view('Job_List/admin_list_joblist', $data);
    }


    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'tugas' => 'required',
            'atasan' => 'required',
            'waktu_pengerjaan' => 'required',
            'deadline' => 'required',
            'keterangan' => 'required'
            
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $news = new JoblistModel();
            $news->insert([
                "id" => $this->request->getPost('id'),
                "tugas" => $this->request->getPost('tugas'),
                "atasan" => $this->request->getPost('atasan'),
                "waktu_pengerjaan" => $this->request->getPost('waktu_pengerjaan'),
                "deadline" => $this->request->getPost('deadline'),
                "keterangan" => $this->request->getPost('keterangan')
                

            ]);
            return redirect('admin/joblist');
        }

        // tampilkan form create
        echo view('Job_List/admin_create_joblist');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $joblist2 = new JoblistModel();
        $data['joblist'] = $joblist2->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'tugas' => 'required',
            'atasan' => 'required',
            'waktu_pengerjaan' => 'required',
            'deadline' => 'required',
            'keterangan' => 'required'
            
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if ($isDataValid) {
            $joblist2->update($id, [
                "id" => $this->request->getPost('id'),
                "tugas" => $this->request->getPost('tugas'),
                "atasan" => $this->request->getPost('atasan'),
                "waktu_pengerjaan" => $this->request->getPost('waktu_pengerjaan'),
                "deadline" => $this->request->getPost('deadline'),
                "keterangan" => $this->request->getPost('keterangan')
                
            ]);
            return redirect('admin/joblist');
        }

        // tampilkan form edit
        echo view('Job_List/admin_edit_joblist', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        $joblist2 = new JoblistModel();
        $joblist2->delete($id);
        return redirect('admin/joblist');
    }
    public function generate()
    {
        $joblist2 = new JoblistModel();
        $data['joblist'] = $joblist2->findAll();
        $view = view('Job_List/pdf_view_joblist', $data);
        
        $filename = ('Form Job Lisr');

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml($view);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
    
}
