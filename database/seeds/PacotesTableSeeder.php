<?php

use Illuminate\Database\Seeder;

class PacotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('pacotes')->insert(['nome'=>'Pacote Social','descricao'=>'Pacote para roupas sociais 10 peças']);
         DB::table('pacotes')->insert(['nome'=>'Pacote Roupa Intima','descricao'=>'Pacote para roupas intímas 14 peças']);
         DB::table('pacotes')->insert(['nome'=>'Pacote cama mesa e banho','descricao'=>'Pacote cama, mesa e banho 7 peças (1 edredom ou cobertor, 2 lençois e 4 toalhas)']);
         DB::table('pacotes')->insert(['nome'=>'Pacote Roupas do dia-a-dia','descricao'=>'Pacote para suas roupas comuns de uso diario)']);
         DB::table('pacotes')->insert(['nome'=>'Pacote Roupas pesadas','descricao'=>'Pacote para larvar suas roupas de couro e jeans)']);
    }
}
