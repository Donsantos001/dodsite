<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->truncate();

        $faker = \Faker\Factory::create();

        foreach(range(1, 23) as $index){
            News::create([
                'headline' => $faker->sentence(9, true),
                'category' => $faker->sentence(1),
                'body' => $faker->paragraph(46, true),
                'image' => $faker->name.'.jpg',
                'created_at' => now()
            ]);
        }
    }
}
