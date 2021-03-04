<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hero::truncate();

        Hero::create([
            'name' => 'Home',
            'hero_title' => 'We can help you find the right home loan',
            'hero_desc' => 'With interest rates so low, now is the time to speak to an Aussie Broker.',
            'hero_image' => 'assets/images/hero/home.png'
        ]);

        Hero::create([
            'name' => 'Why',
            'hero_title' => 'Our experience',
            'hero_desc' => 'For almost 30 years, Aussie has been helping Australians realise their property dreams and goals.',
            'hero_image' => 'assets/images/hero/why.png'
        ]);

        Hero::create([
            'name' => 'Touch',
            'hero_title' => 'Speak with us',
            'hero_desc' => 'Got a question? Give us a call on 13 13 33<br/>Monday to Friday 8am to 6pm AEST, and Saturday 9am to 5pm AEST.',
            'hero_image' => 'assets/images/hero/touch.png'
        ]);
    }
}
