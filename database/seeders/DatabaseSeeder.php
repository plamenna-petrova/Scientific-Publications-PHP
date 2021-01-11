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
               'title' => 'AI Consciousness Level',
               'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
               'type' => 'Book',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s')
           ],
           [
               'title' => 'Software Architecture for the experienced',
               'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
               'type' => 'Report of a conference',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s')
           ]
        ]);

        \DB::table('publication_authors')->insert([
            [
                'publication_id' => 1,
                'author_id' => 2
            ],
            [
               'publication_id' => 2,
               'author_id' => 1
            ]
        ]);
    }
}
