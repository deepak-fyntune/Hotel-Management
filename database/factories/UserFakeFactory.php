<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;

class UserFakeFactory extends Seeder
{
    public function run()
    {
        // Use the UserFactory to create fake users
        \App\Models\Users::factory(10)->create();
    }
}
