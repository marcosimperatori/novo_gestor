<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabGrupos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'exibir' => [ //quando true, o grupo estará disponível para definição do responsável técnico
                'type' => 'BOOLEAN',
                'null' => false,
            ],
            'criado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'atualizado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'deletado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
        ]);

        //diz para o bd para adicionar a coluna id como chave primária
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('nome');
        $this->forge->createTable('grupos');
    }

    public function down()
    {
        $this->forge->dropTable('grupos');
    }
}
