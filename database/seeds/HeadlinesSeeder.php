<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Headlines;

class HeadlinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $headlines = factory(App\Headlines::class, 4)->create();
    }
}