<?php

use App\Models\Lote;
use Illuminate\Database\Seeder;

class loteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Lote::class, 5)->create();
    }
}
