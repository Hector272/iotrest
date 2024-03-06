<?php

namespace Database\Seeders;

use App\Models\Actuator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ActuatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i <10; $i++){
            Actuator::create([
                'name' => $faker->unique()->userName,
                'type' => $faker->randomElement(['Rele', 'Motor', 'Valvula']),
                'value' => $faker->randomFloat(2, 0, 100),
                'date' => $faker->dateTimeThisYear(),
                'user_id' => rand(1, 10)
            ]);
        }
    }
}
