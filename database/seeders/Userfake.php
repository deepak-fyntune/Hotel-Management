<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;
use Faker\Factory as Faker;

class Userfake extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $user = new Users;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = '123';
            $user->save();
        }
    }
}
