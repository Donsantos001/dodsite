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
        $news = factory(App\News::class, 23)->create();
    }
}
