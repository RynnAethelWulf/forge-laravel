<?php

use Illuminate\Database\Seeder;

class dataseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\camp',25)->create();
    }
}
