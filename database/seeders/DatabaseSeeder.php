<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Database\Factories\UserFakeFactory;



class UserFactory extends Seeder
{

    public function run()
    {
        \App\Models\Users::factory(10)->create();
    }
}
