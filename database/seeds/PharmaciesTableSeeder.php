<?php

use Illuminate\Database\Seeder;
use App\Pharmacy;

class PharmaciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Pharmacy::truncate();

        $faker = \Faker\Factory::create();

        // Creating a few pharmacies in our database.
        for($p = 0; $p < 10; $p++)
        {
            Pharmacy::create([
                'registration_number' => $faker->ean8,
                'name' => $faker->company,
                'pharmacist' => $faker->name,
                'address' => $faker->streetAddress,
                'location' => $faker->streetName,
                'ward' => $faker->citySuffix,
                'district' => $faker->state,
                'region' => $faker->city,
                'date_registered' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}
