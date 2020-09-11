<?php

use App\models\SystemVariable;
use Illuminate\Database\Seeder;

class System_VariablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SystemVariable::create([
            'fb_url' => 'https://fb.com',
            'ig_url' => 'https:www.instagram.com',
            'tw_url' => 'www.twitter.com',
            'misc_urls' => 'www.google.com, www.bing.com',
        ]);
    }
}
