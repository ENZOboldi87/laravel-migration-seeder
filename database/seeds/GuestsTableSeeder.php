<?php

use Illuminate\Database\Seeder;
use App\Guest;
use Faker\Generator as Faker;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $newGuest = new Guest();
          $newGuest->name = $faker->firstName();
          $newGuest->lastname = $faker->lastName;
          $newGuest->date_of_birth = $faker->date();
          $newGuest->save();
        }
    }
}
