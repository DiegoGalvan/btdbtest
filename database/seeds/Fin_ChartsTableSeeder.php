<?php

use App\models\FinChart;
use Illuminate\Database\Seeder;

class Fin_ChartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FinChart::create([
            'name' => 'SP1',
            'currency' => 'USD',
            'amount' => 7777777,
            'percent' => 77.77,
            'date' => '2020-09-07',
        ]);
    }
}
