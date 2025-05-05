<?php

namespace Database\Seeders;

use App\Models\Datatable;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DatatablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Datatable::truncate();
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $gender = rand(0, 1) == 0 ? 'Male' : 'Female';

            $countries = ['Australia', 'Canada', 'New Zealand', 'Bangladesh', 'America'];
            $country = $countries[array_rand($countries)];

            Datatable::create([
                'firstname' => $faker->unique()->firstName,
                'lastname' => $faker->unique()->lastName,
                'email'     => $faker->unique()->email,
                'job' => $faker->jobTitle,
                'gender' => $gender,
                'age' => $faker->numberBetween(20, 80),
                'points' => $faker->numberBetween(0, 1000),
                'notes' => $faker->text(100),
                'country' => $country,
                'sale_date' => $faker->dateTimeBetween('2017-09-15', '2017-10-20')
            ]);
        }

        $this->command->info('Dummy data entered for data tables!');
    }
}
