<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; //eloquent orm model
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'password' => Hash::make('123'),
            'rol' => 'A',
        ]);

        $faker = Faker::create();
        for($i=1; $i <10; $i++){
            User::create([
                'username' => $faker->unique()->userName,
                'password' => Hash::make('111'),
                'rol' => $faker->randomElement(['A', 'U', 'D'])
            ]);
        }
    }
}
