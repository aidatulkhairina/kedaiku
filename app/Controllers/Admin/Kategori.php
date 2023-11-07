<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kategori extends BaseController
{

    function __construct(){
        $this->session = \Config\Services::session();
        $this->kategoriModel = new \App\Models\KategoriModel();
    }

    function homepage(){
        $data = [
            'kategori' => $this->kategoriModel->orderBy('id', 'desc')->paginate(8),
            'pager' => $this->kategoriModel->pager,
        ];

        return view('kategori_homepage', $data);
    }

    public function index()
    {
        $session = \Config\Services::session();
            
        //$gambar = $KategoriModel->paginate(3);

        $data = [
            'kategori' => $this->kategoriModel->orderBy('id', 'desc')->paginate(10),
            'pager' => $this->kategoriModel->pager,
        ];

        //return view('users/index', $data);

        return view('admin/admin_kategori/listing', $data);
    }

    public function delete($id){
        
        $this->kategoriModel->where('id',$id)->delete();

        $_SESSION['deleted'] = true;
        $this->session->markAsFlashdata('deleted');

        return redirect()->back();
    }

    function edit($id){
        helper('form');
        $kategori = $this->kategoriModel->find($id);

        return view('admin/admin_kategori/edit', ['kategori' => $kategori] );
    }

    function add(){
        helper('form');
        return view('admin/admin_kategori/add');
    
    }

    //save data dari add new form
    function save_new(){

        $kategoriModel = new \App\Models\KategoriModel();

        $data = [
            'nama' => $this->request->getPost('nama')
        ];

        $kategoriModel->insert($data);
            
            $_SESSION['success'] = true;
            $this->session->markAsFlashdata('success');

            return redirect()->to('/kategori');

    }

    
    function save_edit($id){
       
        $data = [
            'nama' => $this->request->getPost('nama')
        ];


        $this->kategoriModel->update($id, $data);

        $_SESSION['success'] = true;
        $this->session->markAsFlashdata('success');

        return redirect()->back();
        
    }
}
