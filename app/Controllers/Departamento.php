<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Departamento extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Departamentos'
        ];

        return view('departamento/index', $data);
    }
}
