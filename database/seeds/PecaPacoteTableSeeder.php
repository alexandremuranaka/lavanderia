<?php

use Illuminate\Database\Seeder;

class PecaPacoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('peca_pacote')->insert(['peca_id'=> 1, 'pacote_id' => 1]);
         DB::table('peca_pacote')->insert(['peca_id'=> 2, 'pacote_id' => 1]);
         DB::table('peca_pacote')->insert(['peca_id'=> 3, 'pacote_id' => 1]);
         DB::table('peca_pacote')->insert(['peca_id'=> 4, 'pacote_id' => 2]);
         DB::table('peca_pacote')->insert(['peca_id'=> 5, 'pacote_id' => 2]);
         DB::table('peca_pacote')->insert(['peca_id'=> 6, 'pacote_id' => 2]);
         DB::table('peca_pacote')->insert(['peca_id'=> 10, 'pacote_id' => 3]);
         DB::table('peca_pacote')->insert(['peca_id'=> 11, 'pacote_id' => 3]);
         DB::table('peca_pacote')->insert(['peca_id'=> 12, 'pacote_id' => 3]);
         DB::table('peca_pacote')->insert(['peca_id'=> 13, 'pacote_id' => 3]);
         DB::table('peca_pacote')->insert(['peca_id'=> 14, 'pacote_id' => 4]);
         DB::table('peca_pacote')->insert(['peca_id'=> 15, 'pacote_id' => 4]);
         DB::table('peca_pacote')->insert(['peca_id'=> 16, 'pacote_id' => 4]);
         DB::table('peca_pacote')->insert(['peca_id'=> 7, 'pacote_id' => 5]);
         DB::table('peca_pacote')->insert(['peca_id'=> 8, 'pacote_id' => 5]);
         DB::table('peca_pacote')->insert(['peca_id'=> 9, 'pacote_id' => 5]);
    }
}
