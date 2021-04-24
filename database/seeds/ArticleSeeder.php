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
        Article::truncate();

        $article = factory(Article::class, 23)->create();
    }
}
