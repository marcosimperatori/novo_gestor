<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Clientes extends BaseController
{
    private $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Listando os clientes de acesso ao sistema',
        ];

        return view('clientes/index', $data);
    }

    public function recuperaclientes()
    {
        //garatindo que este método seja chamado apenas via ajax
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $atributos = ['id', 'codigo', 'razao', 'telefone'];

        $clientes = $this->clienteModel->select($atributos)->orderBy('razao', 'asc')->findAll();

        //recebe o array de objetos usuários
        $data = [];

        foreach ($clientes as $cliente) {


            $data[] = [
                'codigo' => $cliente->codigo,
                'apelido'      => anchor("clientes/exibir/$cliente->id", esc($cliente->razao), 'title="Exibir detalhes do cliente"'),
                'telefone' => esc($cliente->telefone),
                'acao' => '<i data-id=' . $cliente->id . ' class="fa fa-pencil-square-o text-info editar" title="Editar registro" style="cursor:pointer"></i>
                &nbsp;<i data-id=' . $cliente->id . ' class="fa fa-trash-o text-danger excluir" title="Excluir registro" style="cursor:pointer"></i>',
            ];
        }

        $retorno = [
            'data' => $data
        ];

        return $this->response->setJSON($retorno);
    }
}
