<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Página inicial'
        ];
        return view('home/index', $data);
    }
}
