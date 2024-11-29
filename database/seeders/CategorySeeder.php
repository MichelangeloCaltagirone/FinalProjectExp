<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryNames = [
            "Scienza",
            "Attualità",
            "Giornalismo",
            "Sport",
            "Economia",
            "Cultura"
        ];

        foreach($categoryNames as $name) {
            $newCategory = new Category();
            $newCategory->name = $name;
            $newCategory->save();
        };
    }
}
