<?php

use Illuminate\Database\Seeder;
use App\Events;
use Faker\Generator as Faker;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        $faker = \Faker\Factory::create();

        foreach(range(1, 23) as $index){
            Events::create([
                'headline' => $faker->sentence(9, true),
                'category' => $faker->sentence(1),
                'body' => $faker->paragraph(46, true),
                'image' => $faker->name.'.jpg',
                'date' => $faker->date,
                'venue' => $faker->sentence(4, true),
                'views' => $faker->numberBetween(0, 120000),
                'created_at' => now()
            ]);
        }
    }
}
