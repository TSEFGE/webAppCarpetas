<?php

use Illuminate\Database\Seeder;

class EtniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_etnia')->insert([
            ['id' => '1','etnia' => 'NO APLICA'],
            ['id' => '2','etnia' => 'TOTONACO'],
            ['id' => '3','etnia' => 'HUASTECO']
            ['id' => '4','etnia' => 'POPOLUCA']
            ['id' => '5','etnia' => 'ZAPOTECO']
            ['id' => '6','etnia' => 'CHINANTECO']
            ['id' => '7','etnia' => 'OTOMI']
            ['id' => '8','etnia' => 'MAZATECO']
            ['id' => '9','etnia' => 'TEPEHUA']
            ['id' => '10','etnia' => 'MIXTECO']
            ['id' => '11','etnia' => 'ZOQUE']
            ['id' => '12','etnia' => 'MIXE']
            ['id' => '13','etnia' => 'SE DESCONOCE']
        ]);
    }
}
