<?php

use Illuminate\Database\Seeder;
use App\Report;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Report::truncate();

        $faker = \Faker\Factory::create();

        // Creating a few pharmacies in our database.
        for($p = 0; $p < 10; $p++)
        {
            if($p % 2 == 0)
                $gender = "Male";
            else $gender = "Female";

            Report::create([
                'gender' => $gender,
                'location' => $faker->city,
                'message' => $faker->realText($maxNbChars = 200, $indexSize = 2)
            ]);
        }
    }
}
