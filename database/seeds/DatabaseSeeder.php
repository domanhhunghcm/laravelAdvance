<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
    
        for($i = 0; $i < 15; $i++) {
            App\Channel::create([
                'name' => $faker->name,
            ]);
        }
    }
}
