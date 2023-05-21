<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Home extends BaseController
{
    private $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

    public function index()
    {
        $clientes = $this->clienteModel->withDeleted(false)->findAll();

        $data = [
            'titulo' => 'Página inicial',
            'clientes' => $clientes
        ];
        return view('home/index', $data);
    }
}
