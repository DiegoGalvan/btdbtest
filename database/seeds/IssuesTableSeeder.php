<?php

use App\models\Issue;
use Illuminate\Database\Seeder;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Issue::create([
        //     'name' => 'Septiembre',
        //     'release_date' => '2020-09-08 00:00:00',
        //     'content' => 'Este lanzamiento es el del mes de septiembre del 2020, ¡las noticias mas destacadas!',
        // ]);
        // Issue::create([
        //     'name' => 'Agosto',
        //     'release_date' => '2020-08-08 00:00:00',
        //     'content' => 'Este lanzamiento es el del mes de agosto del 2020, ¡las noticias mas destacadas!',
        //     'newsletter_id' => '2',
        // ]);
        // Issue::create([
        //     'name' => 'Julio',
        //     'release_date' => '2020-07-08 00:00:00',
        //     'content' => 'Este lanzamiento es el del mes de julio del 2020, ¡las noticias mas destacadas!',
        //     'newsletter_id' => '3',
        // ]);
        // Issue::create([
        //     'name' => 'Junio',
        //     'release_date' => '2020-06-08 00:00:00',
        //     'content' => 'Este lanzamiento es el del mes de junio del 2020, ¡las noticias mas destacadas!',
        //     'newsletter_id' => '4',
        // ]);
        // Issue::create([
        //     'name' => 'Mayo',
        //     'release_date' => '2020-05-08 00:00:00',
        //     'content' => 'Este lanzamiento es el del mes de mayo del 2020, ¡las noticias mas destacadas!',
        //     'newsletter_id' => '4',
        // ]);
        // Issue::create([
        //     'name' => 'Abril',
        //     'release_date' => '2020-04-08 00:00:00',
        //     'content' => 'Este lanzamiento es el del mes de abril del 2020, ¡las noticias mas destacadas!',
        //     'newsletter_id' => '4',
        // ]);
        Issue::create([
            'name' => 'Marzo',
            'release_date' => '2020-03-08 00:00:00',
            'content' => 'Este lanzamiento es el del mes de marzo del 2020, ¡las noticias mas destacadas!',
            'newsletter_id' => '4',
        ]);
    }
}
