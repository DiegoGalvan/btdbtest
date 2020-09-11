<?php

use App\models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Category::create([
        //     'name' => 'Tecnologia',
        //     'description' => 'Categoria dedicada a todo lo del mundo de la tecnologia.',
        //     'keywords' => 'tech, ux, foodies',
        // ]);
        Category::create([
            'name' => 'Negocios',
            'description' => 'Categoria dedicada a todo lo del mundo de los negocios.',
            'keywords' => 'business, world',
        ]);
        Category::create([
            'name' => 'Sociales',
            'description' => 'Categoria dedicada a todo lo del mundo de la farandula.',
            'keywords' => 'social, eventos, gossip',
        ]);
        Category::create([
            'name' => 'Moda',
            'description' => 'Categoria dedicada a todo lo del mundo de la moda.',
            'keywords' => 'fashion, innovacion, tendencias',
        ]);
        Category::create([
            'name' => 'Miscelanea',
            'description' => 'Categoria dedicada a todo lo general.',
            'keywords' => 'general, random',
        ]);
    }
}
