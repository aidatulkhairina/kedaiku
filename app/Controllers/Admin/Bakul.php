<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Bakul extends BaseController{

   


    public function index(){
        $_SESSION['cart'] = [
            'items' => [
                ['id' => 1, 'nama' => 'Coffee', 'harga' => 37.80, 'qty' => 2],
                ['id' => 2, 'nama' => 'Lipstick', 'harga' => 37.80, 'qty' => 2],
                ['id' => 3, 'nama' => 'Bagpack', 'harga' => 37.80, 'qty' => 2],
                ['id' => 4, 'nama' => 'Running Shoes', 'harga' => 37.80, 'qty' => 2]
    
            ]
        ];



        return view('bakul');
    }
}

?>