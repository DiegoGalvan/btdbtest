<?php

use App\models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Status::create([
        //     'name' => 'Completa',
        //     'display_name' => 'Completo',
        //     'description' => 'Estatus para reflejar que el entregable ha sido aprobado y esta listo para su lanzamiento',
        //     'class' => 'Ciclo',
        //     'type' => 'Progreso',
        // ]);
        // Status::create([
        //     'name' => 'nueva',
        //     'display_name' => 'Historia nueva',
        //     'description' => 'Estatus para reflejar que el entregable es nuevo y no esta siendo trabajado activamente',
        //     'class' => 'Ciclo',
        //     'type' => 'STORY_STATUS',
        // ]);
        // Status::create([
        //     'name' => 'proceso',
        //     'display_name' => 'Historia en proceso',
        //     'description' => 'Estatus para reflejar que el entregable esta en proceso de ser escrito',
        //     'class' => 'Ciclo',
        //     'type' => 'STORY_STATUS',
        // ]);
        // Status::create([
        //     'name' => 'completo',
        //     'display_name' => 'Issue completo',
        //     'description' => 'Estatus para reflejar que el entregable ha sido aprobado y esta listo para su lanzamiento',
        //     'class' => 'Ciclo',
        //     'type' => 'ISSUE_STATUS',
        // ]);
        Status::create([
            'name' => 'fc_new',
            'display_name' => 'Nueva',
            'description' => 'Capsula financiera recientemente creada',
            'class' => 'FINCAP',
            'type' => 'FIN_CAP_STATUS',
        ]);
        Status::create([
            'name' => 'fc_dev',
            'display_name' => 'En Proceso',
            'description' => 'Capsula financiera en desarrollo',
            'class' => 'FINCAP',
            'type' => 'FIN_CAP_STATUS',
        ]);
        Status::create([
            'name' => 'fc_approval',
            'display_name' => 'En Aprobacion',
            'description' => 'Capsula financiera en proceso de aprobacion',
            'class' => 'FINCAP',
            'type' => 'FIN_CAP_STATUS',
        ]);
        Status::create([
            'name' => 'fc_complete',
            'display_name' => 'Completa',
            'description' => 'Capsula financiera completa, lista para lanzamiento',
            'class' => 'FINCAP',
            'type' => 'FIN_CAP_STATUS',
        ]);
    }
}
