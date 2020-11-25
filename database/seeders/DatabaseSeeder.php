<?php

namespace Database\Seeders;

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
        $this->call(CeilingTableSeeder::class);
        $this->call(FloorTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(WallTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
