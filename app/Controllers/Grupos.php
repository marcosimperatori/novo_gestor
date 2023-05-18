<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Grupo;

class Grupos extends BaseController
{
    private $grupoModel;

    public function __construct()
    {
        $this->grupoModel = new \App\Models\GrupoModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Listando os grupos de acesso ao sistema',
        ];

        return view('grupos/index', $data);
    }

    public function recuperagrupos()
    {
        //garatindo que este método seja chamado apenas via ajax
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $atributos = ['id', 'nome', 'descricao', 'deletado_em'];

        $grupos = $this->grupoModel->select($atributos)->orderBy('nome', 'asc')->findAll();

        //recebe o array de objetos usuários
        $data = [];

        foreach ($grupos as $grupo) {

            $data[] = [
                'nome'      => anchor("grupos/exibir/$grupo->id", esc($grupo->nome), 'title="Exibir detalhes do grupo"'),
                'descricao' => esc($grupo->descricao),
                'exibir'    => ($grupo->exibir == true ? '<i class="fa fa-eye text-secondary"></i>&nbsp;Exibir grupo' : '<i class="fa fa-eye-slash text-warning"></i>&nbsp;Não exibir'),
            ];
        }

        $retorno = [
            'data' => $data
        ];

        return $this->response->setJSON($retorno);
    }
}
