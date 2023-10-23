<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Projectt;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjecttSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            
            $project = new Projectt;
            $project->title = $faker->catchPhrase();
            $project->description = $faker->paragraphs(2, true);
            $project->slug = Str::slug($project->title);
            $project->url = $faker->url();

            $project->save();
            
        }
    }
}   
