<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    /* public function run()
    {
        factory(App\Main::class,30)->create();
    } */


public function run()
    {
        factory(App\picture::class,50)->create();
    }

}
