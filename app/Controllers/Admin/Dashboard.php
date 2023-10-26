<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {

        // $all_pekan = [
        //     [
        //         'nama' => 'Seremban',
        //         'gambar' => 'https://images.unsplash.com/photo-1624676119397-d259357d4924?auto=format&fit=crop&q=80&w=1032&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        //         'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis impedit laborum officia accusantium commodi reprehenderit debitis quia aliquid, eveniet voluptas inventore esse quidem libero, doloribus tempora quam, suscipit iusto!'
        //     ],
        //     [
        //         'nama' => 'Marang',
        //         'gambar' => 'https://images.unsplash.com/photo-1567008368447-99e4dbb16b13?auto=format&fit=crop&q=80&w=893&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        //         'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis impedit laborum officia accusantium commodi reprehenderit debitis quia aliquid, eveniet voluptas inventore esse quidem libero, doloribus tempora quam, suscipit iusto!'
        //     ],
        //     [
        //         'nama' => 'Kuala Pilah',
        //         'gambar' => 'https://images.unsplash.com/photo-1622429538376-874cfcccb32e?auto=format&fit=crop&q=80&w=870&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        //         'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis impedit laborum officia accusantium commodi reprehenderit debitis quia aliquid, eveniet voluptas inventore esse quidem libero, doloribus tempora quam, suscipit iusto!'
        //     ],
        //     [
        //         'nama' => 'Pasir Gudang',
        //         'gambar' => 'https://images.unsplash.com/photo-1671162751178-b573dde6dc25?auto=format&fit=crop&q=60&w=700&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGFzaXIlMjBndWRhbmd8ZW58MHx8MHx8fDA%3D',
        //         'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis impedit laborum officia accusantium commodi reprehenderit debitis quia aliquid, eveniet voluptas inventore esse quidem libero, doloribus tempora quam, suscipit iusto!'
        //     ],
        //     [
        //         'nama' => 'Ayer Keroh',
        //         'gambar' => 'https://images.unsplash.com/photo-1546507316-bf4c85f0671e?auto=format&fit=crop&q=80&w=774&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        //         'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis impedit laborum officia accusantium commodi reprehenderit debitis quia aliquid, eveniet voluptas inventore esse quidem libero, doloribus tempora quam, suscipit iusto!'
        //     ],
        //     [
        //         'nama' => 'Dungun',
        //         'gambar' => 'https://images.unsplash.com/photo-1657978010202-9e30813be396?auto=format&fit=crop&q=80&w=1032&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        //         'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis impedit laborum officia accusantium commodi reprehenderit debitis quia aliquid, eveniet voluptas inventore esse quidem libero, doloribus tempora quam, suscipit iusto!'
        //     ]

        // ];
        
        $db = db_connect();

        $result = $db->query('SELECT * FROM gambar ORDER BY nama asc');
        $all_pekan = $result->getResult();

        //dd($all_pekan);

        return view('admin/dashboard/index', ['all_pekan' => $all_pekan]);
    }

    function cuba(){
        echo "cuba saja";
    }
}
