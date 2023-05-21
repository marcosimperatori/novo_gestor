<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DepPessoal extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Dashboard - Departamento Pessoal',
        ];

        return view('deppessoal/index', $data);
    }
}
