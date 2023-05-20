<?php

namespace App\Database\Seeds;

use App\Models\ClienteModel;
use CodeIgniter\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $clienteModel = new ClienteModel();

        $faker = \Faker\Factory::create('pt_BR');

        $qtdeRegistros = 800;

        $clientesPush = [];

        for ($i = 0; $i < $qtdeRegistros; $i++) {
            array_push($clientesPush, [
                'razao'         => $faker->unique(30000)->company(),
                'email'         => $faker->unique(30000)->companyEmail(),
                'cnpj'          => $faker->unique(30000)->cnpj(),
                'ativo'         => $faker->numberBetween(0, 1),
                'controlacnd'       => $faker->numberBetween(0, 1),
                'movimentocontabil' => $faker->numberBetween(0, 1),
                'codigo' => $faker->numberBetween(1, 10000),
            ]);
        }

        $clienteModel->skipValidation(true)
            ->protect(false)
            ->insertBatch($clientesPush);

        echo "$qtdeRegistros clientes criados com sucesso!";
    }
}
