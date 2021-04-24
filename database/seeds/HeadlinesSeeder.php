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
        Headlines::truncate();

        $headlines = factory(Headlines::class, 3)->create();
    }
}