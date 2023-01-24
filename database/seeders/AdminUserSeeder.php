<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'current_team_id' => 1,
        ]);

        User::create([
            'id' => '2',
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user123'),
            'current_team_id' => 2,
        ]);

        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10000; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('user123'),
                'current_team_id' => 2,
            ]);
        }
    }
}
