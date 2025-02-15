<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Makanan', 'description' => 'Kategori makanan'],
            ['name' => 'Minuman', 'description' => 'Kategori minuman'],
            ['name' => 'Pakaian', 'description' => 'Kategori pakaian'],
            ['name' => 'Elektronik', 'description' => 'Kategori elektronik'],
            ['name' => 'Organ', 'description' => 'Kategori organ'],
        ];
        \App\Models\Category::insert($data);
    }
}
