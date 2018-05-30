<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(DosensTableSeeder::class);
        $this->call(KriteriasTableSeeder::class);
        //$this->call(NilaisTableSeeder::class);
        $this->call(SubKriteriasTableSeeder::class);
    }
}
