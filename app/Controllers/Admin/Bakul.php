<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Bakul extends BaseController{

   
    function __construct(){
        $this->session = session();
        $this->produkModel = new \App\Models\ProdukModel();
    }

    public function index(){

        return view('bakul');
    }

    function add(){

        

        if(!isset($_SESSION['cart']['items'])){
            // $_SESSION['cart'] = [
            //     'items' => [],
            // ];
            $_SESSION['cart']['items'] = [];
        }

        //get data from form
        $produk_id = $this->request->getPost('produk_id');
        $qty = $this->request->getPost('qty');

        //find produk from db
        $produk = $this->produkModel->find($produk_id);

        //if produk found, add to cart
        if($produk && isset($produk['id'])){
            //var_dump($produk['id']);
            //$this->add_cart('id', 'nama', 'harga', $qty);
            $this->add_cart($produk['id'], $produk['nama'], $produk['harga'], $qty);

            $_SESSION['success'] = true;
            $this->session->markAsFlashdata('success');
       }
        return redirect()->back();
       }

    protected function add_cart($id, $nama, $harga, $qty){
        if(!isset($_SESSION['cart']['items'])){
            $_SESSION['cart'] = [
                'items' => []
            ];
        }

        $found = false;
        foreach($_SESSION['cart']['items'] as $index => $item){
            if ($item['id'] == $id){
                $_SESSION['cart']['items'][$index]['qty'] += $qty;
                $found = true;
            }
        }

            if(!$found){
                $_SESSION['cart']['items'][] = [
                    'id' => $id,
                    'nama' => $nama,
                    'harga' => $harga,
                    'qty' => $qty
                ];
            }
        

        return true;

    }

   

    function update(){
        //print_r($_POST);
        $_SESSION['cart'] = [
            'items' => []
        ];

        $qty = $this->request->getPost('qty');

        $all_ids = [];

        if (!is_null($qty)) {
        
            foreach($qty as $id => $val){
                $all_ids[] = $id;
                $produks = $this->produkModel->find($id);

                if ($qty[$produks['id']] > 0) {
                    $this->add_cart($produks['id'], $produks['nama'], $produks['harga'], $val);
                }
            }
        }
        

    $_SESSION['success'] = true;
    $this->session->markAsFlashdata('success');

    return redirect()->back();


    

    }

    function remove($id){
        foreach($_SESSION['cart']['items'] as $k => $item){
            if($item['id'] == $id){
                unset($_SESSION['cart']['items'][$k]);
                //session->remove($k);
            }

            
        }

        $_SESSION['remove'] = true;
        $this->session->markAsFlashdata('remove');
    
        return redirect()->back();


    }
    


}

?>