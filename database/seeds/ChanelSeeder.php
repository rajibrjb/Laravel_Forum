<?php

use Illuminate\Database\Seeder;

class ChanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'Laravel', 'slug' => str_slug('Laravel') ];
        $channel2 = ['title' => 'Vuejs', 'slug' => str_slug('Vuejs') ];
        $channel3 = ['title' => 'Javascript', 'slug' => str_slug('Javascript') ];
        $channel4 = ['title' => 'CSS3', 'slug' => str_slug('CSS3')];
        $channel5 = ['title' => 'PHP Testing', 'slug' => str_slug('PHP Testing')];
        $channel6 = ['title' => 'Spark', 'slug' => str_slug('Spark')];
        $channel7 = ['title' => 'Lumen', 'slug' => str_slug('Lumen')];
        $channel8 = ['title' => 'Forge', 'slug' => str_slug('Forge')];

        App\Channel::create($channel1);
        App\Channel::create($channel2);
        App\Channel::create($channel3);
        App\Channel::create($channel4);
        App\Channel::create($channel5);
        App\Channel::create($channel6);
        App\Channel::create($channel7);
        App\Channel::create($channel8);
    }
}
