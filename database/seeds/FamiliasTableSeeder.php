<?php

use Illuminate\Database\Seeder;

class FamiliasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('familias')->insert(['nome'=>'Social']);
         DB::table('familias')->insert(['nome'=>'Intima']);
         DB::table('familias')->insert(['nome'=>'Pesada']);
         DB::table('familias')->insert(['nome'=>'Cama mesa e banho']);
         DB::table('familias')->insert(['nome'=>'Comum']);
    }
}
