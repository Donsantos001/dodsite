<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();

        $faker = \Faker\Factory::create();

        foreach(range(1, 23) as $index){
            Article::create([
                'headline' => $faker->sentence(4, true),
                'body' => $faker->paragraph(46, true),
                'image' => $faker->name.'.jpg',
                'views' => $faker->numberBetween(0, 120000),
                'created_at' => now()
            ]);
        }
    }
}
