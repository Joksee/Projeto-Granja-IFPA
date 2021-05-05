<?php

use App\Models\Frango;
use App\Models\Lote;
use Illuminate\Database\Seeder;

class frangoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Frango::class, 5)->create();
    }
}
