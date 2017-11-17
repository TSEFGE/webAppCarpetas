<?php

use Illuminate\Database\Seeder;

class ColoniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_colonia')->insert([
            'idCodigoPostal' => '93700',
            'nombre' => 'Altotonga centro',
        ]);
    }
}
