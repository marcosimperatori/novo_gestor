<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{

    protected $table            = 'clientes';


    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;

    protected $allowedFields    = [
        'codigo', 'cnpj', 'razao', 'apelido', 'ie', 'codigosimples', 'cpfempresario', 'telefone',
        'email', 'clientedesde', 'contato', 'tipocertificado', 'vectocertificado', 'qtdefuncionarios',
        'regimetributario', 'controlacnd', 'movimentocontabil'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $beforeUpdate   = [];
}
