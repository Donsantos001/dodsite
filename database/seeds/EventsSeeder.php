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
        Events::truncate();

        $events = factory(Events::class, 23)->create();
    }
}