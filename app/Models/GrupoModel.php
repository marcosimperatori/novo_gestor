<?php

namespace App\Models;

use CodeIgniter\Model;

class GrupoModel extends Model
{
    protected $table            = 'grupos';
    protected $returnType       = 'App\Entities\Grupo';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['nome', 'descricao', 'exibir'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [
        'nome'       => 'required|min_length[4]|max_length[100]|is_unique[grupos.nom,id,{id}]',
        'descricao'  => 'required|max_length[250]'
    ];

    protected $validationMessages   = [
        'nome' => [
            'required'   => 'O campo NOME é obrigatório.',
            'min_length' => 'O NOME precisa ter ao menos 04 caracteres.',
            'max_length' => 'O NOME pode ter no máximo 100 caracteres.',
            'is_unique'  => 'Este NOME já está sendo utilizado, favor informar um nome disponível'
        ],
        'descricao' => [
            'required'    => 'O campo EMAIL é obrigatório.',
            'max_length'  => 'O EMAIL pode ter no máximo 250 caracteres.',
        ],
    ];
}
