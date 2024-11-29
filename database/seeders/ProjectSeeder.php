<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $projects = [
        //     [
        //     "name" => "Liuteria",
        //     "author" => "Andrea",
        //     "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime magnam, aperiam iste consectetur nesciunt illo quo cupiditate ducimus adipisci molestias architecto, omnis, vitae quibusdam quasi. Beatae autem unde excepturi"
        //     ],
        //     [
        //     "name" => "Fotografia",
        //     "author" => "Barbara",
        //     "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime magnam, aperiam iste consectetur nesciunt illo quo cupiditate ducimus adipisci molestias architecto, omnis, vitae quibusdam quasi. Beatae autem unde excepturi"
        //     ],
        //     [
        //     "name" => "Illustrazione",
        //     "author" => "Pietro",
        //     "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime magnam, aperiam iste consectetur nesciunt illo quo cupiditate ducimus adipisci molestias architecto, omnis, vitae quibusdam quasi. Beatae autem unde excepturi"
        //     ],
        // ];

        $categoryIds = Category::all()->pluck("id");

        for($i = 0; $i < 100; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->firstName();
            $newProject->category_id = $faker->randomElement($categoryIds);
            $newProject->author = $faker->firstName() .' '. $faker->unique()->lastName();
            $newProject->description = $faker->realTextBetween(150, 450);
            $newProject->save();
        }
        // foreach($projects as $project) {
        //     $newProject = new Project();
        //     $newProject->name = $project["name"];
        //     $newProject->author = $project["author"];
        //     $newProject->description = $project["description"];
        //     $newProject->save();
        // }
    }

}
