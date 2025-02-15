<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Pasya', 'email' => 'abangadiksantoso869@gmail.com', 'password' => bcrypt('pasya')],
            ['name' => 'Pasya Keren', 'email' => 'abangadiksantosokeren869@gmail.com', 'password' => bcrypt('pasya')],
            ['name' => 'Pasya Ganteng', 'email' => 'abangadiksantosoganteng869@gmail.com', 'password' => bcrypt('pasya')],
        ];
        \App\Models\User::insert($data);
    }
}
