<?php

use Illuminate\Database\Seeder;

class recepies_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('recepies')->insert([
            'name' =>'Ramen',
            'ingredients' => 'Salt,Meat,Water',
            'category' => 'Chinese Food',
        ]);
    }
}
