<?php

use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_estado_civil')->insert([
            [ 'id' => 0, 'nombre' => 'SIN INFORMACION'],
            [ 'id' => 1, 'nombre' => 'SOLTERO'],
            [ 'id' => 2, 'nombre' => 'CASADO'],
            [ 'id' => 3, 'nombre' => 'Viudo'],
            [ 'id' => 4, 'nombre' => 'Divorciado'],
            [ 'id' => 5, 'nombre' => 'Concubinato'],
            [ 'id' => 6, 'nombre' => 'Unión libre']
        ]);
    }
}
