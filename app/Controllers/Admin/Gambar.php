<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Gambar extends BaseController
{

    function __construct(){
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        


        $gambarModel = new \App\Models\GambarModel();
        $session = \Config\Services::session();
            
        //$gambar = $gambarModel->paginate(3);

        $data = [
            'gambar' => $gambarModel->orderBy('id', 'desc')->paginate(3),
            'pager' => $gambarModel->pager,
        ];

        //return view('users/index', $data);

        return view('admin/listing', $data);
    }

    public function delete($id){
        $gambarModel = new \App\Models\GambarModel();
        
        $gambarModel->where('id',$id)->delete();

        $_SESSION['deleted'] = true;
        $this->session->markAsFlashdata('deleted');

        return redirect()->back();
    }

    function edit($id){
        helper('form');
        $gambarModel = new \App\Models\GambarModel();
        $gambar = $gambarModel->find($id);

        return view('admin/edit', ['gambar' => $gambar] );
    }

    function add(){
        helper('form');
        return view('admin/add');
    
    }

    //save data dari add new form
    function save_new(){

        //return view('admin/add');
        $gambarModel = new \App\Models\GambarModel();
        //$nama = $this->request->getPost('nama');
        //$description = $this->request->getPost('description');
        
        $data = [
            'nama' => $this->request->getPost('nama'),
            'description' => $this->request->getPost('description')
        ];


        $file = $this->request->getFile('nama_file');

        if($file){
            //$file = $files['nama_file'];

            $nama_file = $file->getRandomName();

            $file->move('img/', $nama_file);

            $data ['nama_file'] = $nama_file;

            $gambarModel->insert($data);
            
            $_SESSION['success'] = true;
            $this->session->markAsFlashdata('success');

            return redirect()->to('/gambar');
        }

        
        

    }

    
    function save_edit($id){
        //return view('admin/add');
        $gambarModel = new \App\Models\GambarModel();
        //$nama = $this->request->getPost('nama');
        //$description = $this->request->getPost('description');
        
        $data = [
            'nama' => $this->request->getPost('nama'),
            'description' => $this->request->getPost('description')
        ];


        $file = $this->request->getFile('nama_file');

        if($file){
            //$file = $files['nama_file'];

            $nama_file = $file->getRandomName();

            $file->move('img/', $nama_file);

            $data ['nama_file'] = $nama_file;
        }

        $gambarModel->update($id, $data);

        $_SESSION['success'] = true;
        $this->session->markAsFlashdata('success');

        return redirect()->to('/gambar/');
        
    }
}
