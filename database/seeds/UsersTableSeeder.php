<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();

        // Creating a demo user in our database.
        User::create([
            'name' => "Administrator",
            'email' => "admin@codefortanzania.org",
            'password' => bcrypt('123456'),
            'api_key' => str_random(60)
        ]);
    }
}
