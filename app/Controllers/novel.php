<?php

namespace App\Controllers;

use App\Models\NovelModel;

class Novel extends BaseController
{
  protected $novelModel;

  public function __construct()
  {
    $this->novelModel = new NovelModel();
  }

  public function index()
  {
    $novel = $this->novelModel->findall();

    $data = [
      'title' => 'Daftar Novel',
      'novel' => $novel
    ];
    // cara koenk tanpa model
    // $db = \Config\Database::connect();
    // $novel = $db->query("SELECT * FROM novel");
    // foreach ($novel->getResultArray() as $row) {
    //   d($row);
    // }

    // $novelModel = new NovelModel();
    // $novel = $novelModel->findall();
    // dd($novel);

    return view('novel/index', $data);
  }
}
