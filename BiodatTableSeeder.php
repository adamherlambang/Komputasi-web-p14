<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Biodatas TableSeeder extends Seeder
{

    public function run() 
    {
        DB::table('biodatas')->insert([
            [

                  'first_name' => 'Udin',
                  'last_name' => 'Bahri',
                  'gender' => 'male',
                  'created at' => now(),
                  'updated at' => now(),
            ],
            [
                  'first_name' => 'Amel',
                  'last name' => 'Putri', 
                  'gender' => 'female',
                  'created at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
