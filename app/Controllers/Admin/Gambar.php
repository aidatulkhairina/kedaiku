<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Gambar extends BaseController
{
    public function index()
    {
        $gambarModel = new \App\Models\GambarModel();

        $gambar = $gambarModel->findAll();

        //dd($gambarModel);

       return view('admin/listing', ['gambar' => $gambar]);
    }

    public function delete(){
        echo "delete saja";
    }

    function edit(){
        echo "edit saja";
    }

    function add(){
        echo "add saja";
    }
}
