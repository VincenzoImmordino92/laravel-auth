<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0 ; $i < 30; $i++){
            $new_project = new Project();
            $new_project->title = $faker->sentence(3);
            $new_project->slug = Project::generateSlug($new_project->title);
            $new_project->start_date = $faker->date();
            $new_project->end_date = $faker->date();
            $new_project->description = $faker->paragraph();
            $new_project->url = 'https://fakerphp.github.io/formatters/text-and-paragraphs/';
            $new_project->save();
        }
    }
}
