<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Work::class, 3)->create();

        \App\Work::create([
            'title' => 'Developement web',
            'description' => 'Création d\'applications sur mesure.',
            'url' => '#'
        ]);

        \App\Work::create([
            'title' => 'Application mobile',
            'description' => 'Création et publication de votre application dans les stores Android et Apple.',
            'url' => '#'
        ]);

        \App\Work::create([
            'title' => 'Formation',
            'description' => 'Session de formation en ligne ou dans vos locaux.',
            'url' => '#'
        ]);
    }
}
