<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodosPagamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metodo_pagamento')->insert([
            [
                'id' => 1,
                'forma_de_pagamento' => 'Dinheiro',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'forma_de_pagamento' => 'Cartão',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
