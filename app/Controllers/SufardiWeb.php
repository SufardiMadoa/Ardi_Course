<?php

namespace App\Controllers;

class SufardiWeb extends BaseController
{
    public function beranda() 
    {
        $data = [
            'title' => 'tBeranda'
        ];

        echo view('/layout/kepala', $data);
        echo view('index');
        echo view('/layout/kaki');
    }
    public function login() 
    {
        $data = [
            'title' => 'tlogin'
        ];

        echo view('/layout/kepala', $data);
        echo view('login');
        echo view('/layout/kaki');
    }

    public function features() //: string
    {
        $data = [
            'title' => 'tfeatures'
        ];
        echo view('/layout/kepala', $data);
        echo view('features');
        echo view('/layout/kaki');
    }
    public function dashboard() //: string
{
    $xx = new \App\Models\EventModel();

    $hasil = $xx->findAll();
    $data = [
        'title' => 'tdashboard',
        'pengunjung' => 'Sufardi',
        'event' => $hasil
    ];
    echo view('layout/dashboardNavbar');
    echo view('dashboard', $data);
}
}
