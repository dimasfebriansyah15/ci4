<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | DImas Febriansyah',
      'tes' => ['satu', 'dua', 'tiga']
    ];
    echo view('pages/home', $data);
  }
  public function about()
  {
    $data = [
      'title' => 'About Me'
    ];
    echo view('pages/about', $data);
  }
  public function contact()
  {
    $data = [
      'title' => 'Contact US',
      'alamat' => [
        [
          'tipe' => 'Rumah',
          'alamat' => 'Jl Kebayoran',
          'kota' => 'jakarta'
        ],
        [
          'tipe' => 'Kantor',
          'alamat' => 'jl sudirman',
          'kota' => 'jakarta'
        ]
      ]
    ];
    echo view('pages/contact', $data);
  }

  //--------------------------------------------------------------------

}
