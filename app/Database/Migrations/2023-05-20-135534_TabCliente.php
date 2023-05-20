<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabCliente extends Migration
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
            'codigo' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'cnpj' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'razao' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'apelido' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
                'default' => null,
            ],
            'ie' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
                'default' => null,
            ],
            'codigosimples' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
                'default' => null,
            ],
            'cpfempresario' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
                'default' => null,
            ],
            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
                'default' => null,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'default' => null,
            ],
            'clientedesde' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'contato' => [
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => true,
                'default' => null,
            ],
            'tipocertificado' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
                'default' => null,
            ],
            'vectocertificado' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'qtdefuncionarios' => [
                'type' => 'INT',
                'constraint' => 10,
                'default' => 0,
            ],
            'regimetributario' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'default' => null,
            ],
            'ativo' => [
                'type' => 'BOOLEAN',
                'null' => false,
            ],
            'controlacnd' => [
                'type' => 'BOOLEAN',
                'null' => false,
            ],
            'movimentocontabil' => [
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
        $this->forge->addUniqueKey('razao');
        $this->forge->addUniqueKey('cnpj');
        $this->forge->addUniqueKey('email');
        $this->forge->addUniqueKey('ie');
        $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');
    }
}
