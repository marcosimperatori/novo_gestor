<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cliente extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Clientes'
        ];

        return view('cliente/index', $data);
    }
}
