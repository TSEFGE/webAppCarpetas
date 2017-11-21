<?php

use Illuminate\Database\Seeder;

class DelitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    ////BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_delito')->insert([
        	['id' => 0,'nombre' => 'SIN INFORMACION'],
            ['id' => 1,'nombre' => 'SECUESTRO'],
            ['id' => 2,'nombre' => 'HOMICIDIO'],
            ['id' => 3,'nombre' => 'ROBO'],
            ['id' => 4,'nombre' => 'CONTRA LA SALUD'],
            ['id' => 5,'nombre' => 'VIOLACION'],
            ['id' => 6,'nombre' => 'LESIONES']
        ]);
    }
}
