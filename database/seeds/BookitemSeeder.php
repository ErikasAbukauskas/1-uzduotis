<?php

use Illuminate\Database\Seeder;

use App\Bookitem;

class BookitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bookitem::class, 200)->create();
    }
}
