<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologyNames = [
            "Html",
            "Css",
            "Java Script",
            "Php",
            "Framework Laravel",
            "Framework Vite",
            "Front-end",
            "Back-end",
            "Server side"
        ];

        foreach($technologyNames as $name) {
            $newtechnology = new Technology();
            $newtechnology->name = $name;
            $newtechnology->save();
        };
    }
}
