<?php

namespace App\Controllers;

use \App\Models\ProductsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProductsAdmin extends BaseController
{
    public function index()
    {
        $products = new ProductsModel();
        $data['product'] = $products->findAll();
        echo view('admin_list_products', $data);
    }

    //--------------------------------------------------------------------------

    // public function preview($id)
    // {
    //     $products = new ProductsModel();
    //     $data['product'] = $products->where('id', $id)->first();

    //     if (!$data['product']) {
    //         throw PageNotFoundException::forPageNotFound();
    //     }
    //     echo view('products_detail', $data);
    // }

    //--------------------------------------------------------------------------

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'country' => 'required',
            'order_method_type' => 'required',
            'retailer_type' => 'required',
            'product_line' => 'required',
            'item_type' => 'required',
            'product' => 'required',
            'year' => 'required',
            'quarter' => 'required',
            'total_revenue' => 'required',
            'units_sold' => 'required',
            'unit_cost' => 'required',
            'gross_margin' => 'required',
            'total_profit' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $news = new ProductsModel();
            $news->insert([
                "country" => $this->request->getPost('country'),
                "order_method_type" => $this->request->getPost('order_method_type'),
                "retailer_type" => $this->request->getPost('retailer_type'),
                "product_line" => $this->request->getPost('product_line'),
                "item_type" => $this->request->getPost('item_type'),
                "product" => $this->request->getPost('product_line'),
                "year" => $this->request->getPost('year'),
                "quarter" => $this->request->getPost('quarter'),
                "total_revenue" => $this->request->getPost('total_revenue'),
                "units_sold" => $this->request->getPost('units_sold'),
                "unit_cost" => $this->request->getPost('unit_cost'),
                "gross_margin" => $this->request->getPost('gross_margin'),
                "total_profit" => $this->request->getPost('total_profit')
            ]);
            return redirect('admin/product');
        }

        // tampilkan form create
        echo view('admin_create_products');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $products = new ProductsModel();
        $data['product'] = $products->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'country' => 'required',
            'order_method_type' => 'required',
            'retailer_type' => 'required',
            'product_line' => 'required',
            'item_type' => 'required',
            'product' => 'required',
            'year' => 'required',
            'quarter' => 'required',
            'total_revenue' => 'required',
            'units_sold' => 'required',
            'unit_cost' => 'required',
            'gross_margin' => 'required',
            'total_profit' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if ($isDataValid) {
            $products->update($id, [
                "country" => $this->request->getPost('country'),
                "order_method_type" => $this->request->getPost('order_method_type'),
                "retailer_type" => $this->request->getPost('retailer_type'),
                "product_line" => $this->request->getPost('product_line'),
                "item_type" => $this->request->getPost('item_type'),
                "product" => $this->request->getPost('product'),
                "year" => $this->request->getPost('year'),
                "quarter" => $this->request->getPost('quarter'),
                "total_revenue" => $this->request->getPost('total_revenue'),
                "units_sold" => $this->request->getPost('units_sold'),
                "unit_cost" => $this->request->getPost('unit_cost'),
                "gross_margin" => $this->request->getPost('gross_margin'),
                "total_profit" => $this->request->getPost('total_profit')
            ]);
            return redirect('admin/product');
        }

        // tampilkan form edit
        echo view('admin_edit_products', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        $products = new ProductsModel();
        $products->delete($id);
        return redirect('admin/product');
    }
}
