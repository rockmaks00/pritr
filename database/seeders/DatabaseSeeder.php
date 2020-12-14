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
    {   //пред генерация
        $this->call(UserTableSeeder::class);
        $this->call(MaterialTableSeeder::class);
        //каскадная
        $this->call(RoomTableSeeder::class);
        //не используются
        $this->call(CeilingTableSeeder::class);
        $this->call(FloorTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(WallTableSeeder::class);
    }
}
