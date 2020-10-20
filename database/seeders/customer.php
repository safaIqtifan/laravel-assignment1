<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<20; $i++){
            DB::table('create_customers_table')->Insert([

            ]);
        }
    }
}
