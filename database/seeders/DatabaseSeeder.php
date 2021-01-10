<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Seeding the database
        \DB::table('authors')->insert([
            [
                'name' => 'Diane Brody',
                'occupation' => 'Software Architect, Freelancer',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Andrew Quentin',
                'occupation' => 'Cognitive Scientist',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

        \DB::table('publications')->insert([
           [
               'title' => 'AI Consciousness',
               'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
               'type' => 'Book',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s')
           ],
           [
               'title' => 'Software Architecture for experts',
               'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
               'type' => 'Report of a conference',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s')
           ]
        ]);
    }
}
