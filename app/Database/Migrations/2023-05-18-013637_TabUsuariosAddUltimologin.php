<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabUsuariosAddUltimologin extends Migration
{
    public function up()
    {
        $this->forge->addColumn('usuarios', [
            'ultimo_login' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('usuarios', 'ultimo_login');
    }
}
