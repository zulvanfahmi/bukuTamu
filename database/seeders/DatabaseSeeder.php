<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bukutamu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name' => 'Harry Maguire',
        //     'email' => 'harrymaguire555@gmail.com',
        //     'password' => bcrypt('qwerty1234?'),
        //     'is_admin' => True,
        // ]);

        Bukutamu::factory(5)->create();
    }
}
