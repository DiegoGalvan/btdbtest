<?php

use App\models\File;
use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        File::create([
            'filename' => 'archivo1',
            'extension' => '.png',
            'mime_type' => 'image/png',
            'alt_text' => 'Alt1',
            'type' => 'imagenes',
            'fileable_id' => 999,
            'fileable_type' => 'imagenes png',
        ]);
    }
}
