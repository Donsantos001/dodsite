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
        DB::table('headlines')->truncate();

        $faker = \Faker\Factory::create();

        foreach(range(1, 4) as $index){
            Headlines::create([
                'headline' => $faker->sentence(10, true),
                'body' => $faker->sentence(26, true),
                'created_at' => now(),
                'image' => $faker->name
            ]);
        }
    }
}