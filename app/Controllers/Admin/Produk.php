<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Produk extends BaseController
{

    function __construct(){
        $this->session = \Config\Services::session();
        $this->produkModel = new \App\Models\ProdukModel();
        $this->kategoriModel = new \App\Models\KategoriModel();
    }

    function homepage(){

        $kategori = $this->kategoriModel->dropdown();

        $data = [
            'produk' => $this->produkModel->orderBy('id', 'desc')->paginate(8),
            'pager' => $this->produkModel->pager,
            'kategori' => $kategori
        ];

        return view('produk_homepage', $data);
    }

    public function index()
    {
        $session = \Config\Services::session();
            
        //$gambar = $produkModel->paginate(3);
        $kategori = $this->kategoriModel->dropdown();

        $data = [
            'produk' => $this->produkModel->orderBy('id', 'desc')->paginate(10),
            'pager' => $this->produkModel->pager,
            'kategori' => $kategori
        ];

        //return view('users/index', $data);

        return view('admin/admin_produk/listing', $data);
    }

    public function delete($id){
        
        $this->produkModel->where('id',$id)->delete();

        $_SESSION['deleted'] = true;
        $this->session->markAsFlashdata('deleted');

        return redirect()->back();
    }

    function edit($id){
        helper('form');
        $produk = $this->produkModel->find($id);
        $kategori = $this->kategoriModel->dropdown();

        return view('admin/admin_produk/edit', ['kategori' => $kategori, 'produk' => $produk] );
    }

    function add(){
        $kategori = $this->kategoriModel->dropdown();
        //helper('form');
        return view('admin/admin_produk/add',  ['kategori' => $kategori]);
    
    }

    //save data dari add new form
    function save_new(){

        $data = [
            'nama' => $this->request->getPost('nama'),
           'description' => $this->request->getPost('description'),
            'harga' => $this->request->getPost('harga')
        
        ];

        if($this->request->getPost('kategori_id') != '0'){
            $data['kategori_id'] = $this->request->getPost('kategori_id');
        }

        $file = $this->request->getFile('gambar');

        if($file->isReadable()){
            //$file = $files['gambar'];

            $gambar = $file->getRandomName();

            $file->move('img/', $gambar);

            $data ['gambar'] = $gambar;

            $this->produkModel->insert($data);
            
            $_SESSION['success'] = true;
            $this->session->markAsFlashdata('success');

            return redirect()->to('/produk');
        }

        
        

    }

    
    function save_edit($id){
       
        $data = [
            'nama' => $this->request->getPost('nama'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'description' => $this->request->getPost('description'),
            'harga' => $this->request->getPost('harga')
        
        ];


        $file = $this->request->getFile('gambar');

        if($file->isReadable()){
            //$file = $files['gambar'];

            $gambar = $file->getRandomName();

            $file->move('img/', $gambar);

            $data ['gambar'] = $gambar;
        }

        $this->produkModel->update($id, $data);

        $_SESSION['success'] = true;
        $this->session->markAsFlashdata('success');

        return redirect()->back();
        
    }
}
