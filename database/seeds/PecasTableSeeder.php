<?php

use Illuminate\Database\Seeder;

class PecasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('pecas')->insert(['nome'=>'Camisa', 'familia_id' => 1]);
         DB::table('pecas')->insert(['nome'=>'Palito', 'familia_id' => 1]);
         DB::table('pecas')->insert(['nome'=>'Calça Social', 'familia_id' => 1]);
         DB::table('pecas')->insert(['nome'=>'Cueca', 'familia_id' => 2]);
         DB::table('pecas')->insert(['nome'=>'Calcinha', 'familia_id' => 2]);
         DB::table('pecas')->insert(['nome'=>'Meia Calça', 'familia_id' => 2]);
         DB::table('pecas')->insert(['nome'=>'Calça Jeans', 'familia_id' => 3]);
         DB::table('pecas')->insert(['nome'=>'Blusa de Couro', 'familia_id' => 3]);
         DB::table('pecas')->insert(['nome'=>'Blusa Jeans', 'familia_id' => 3]);
         DB::table('pecas')->insert(['nome'=>'Edredom', 'familia_id' => 4]);
         DB::table('pecas')->insert(['nome'=>'Cobertor de Manta', 'familia_id' => 4]);
         DB::table('pecas')->insert(['nome'=>'Toalha', 'familia_id' => 4]);
         DB::table('pecas')->insert(['nome'=>'Toalha de Rosto', 'familia_id' => 4]);
         DB::table('pecas')->insert(['nome'=>'Camiseta', 'familia_id' => 5]);
         DB::table('pecas')->insert(['nome'=>'Calça Moletom', 'familia_id' => 5]);
         DB::table('pecas')->insert(['nome'=>'Blusa Moletom', 'familia_id' => 5]);
    }
}
