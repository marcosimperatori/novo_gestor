<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';

    protected $returnType       = '\App\Entities\Usuario';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [
        'nome',
        'email',
        'password',
        'reset_hash',
        'reset_expira_em',
        'imagem',
        //o campo ativo será alterado via manipulação de formulário
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
    protected $beforeInsert   = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];

    /**
     * Método intercepta a requisição e faz o hash da posição password, caso exista.
     * Depois elimina do array de post a posição password.
     *
     * @param [type] $data
     * @return void
     */
    protected function hashPassword($data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

            //removendo estas posições pois não existem no banco de dados
            unset($data['data']['password']);
            unset($data['data']['password_confirmation']);
        }

        return $data;
    }
}
