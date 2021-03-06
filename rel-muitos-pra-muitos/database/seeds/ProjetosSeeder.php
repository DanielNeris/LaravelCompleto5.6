<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert([
            'nome' => 'EzBank' ,
            'estimativa_horas' => 200
        ]);

        DB::table('projetos')->insert([
            'nome' => 'Sistema Rodoviário',
            'estimativa_horas' => 1000
            ]);

        DB::table('projetos')->insert([
            'nome' => 'Sistema de Vendas',
            'estimativa_horas' => 2000
        ]);

        DB::table('projetos')->insert([
            'nome' => 'Novo Sistema',
            'estimativa_horas' => 5000
        ]);
    }
}
