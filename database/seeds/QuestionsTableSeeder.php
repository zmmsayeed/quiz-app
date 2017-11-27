<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('questions')->insert([
            'quiz_id' => 1,
            'text' => 'Whats my name?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('questions')->insert([
            'quiz_id' => 1,
            'text' => 'Whats the project on?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('questions')->insert([
            'quiz_id' => 1,
            'text' => 'What framework are we using for this project?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('questions')->insert([
            'quiz_id' => 2,
            'text' => 'Is this verbal reasoning section?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('questions')->insert([
            'quiz_id' => 2,
            'text' => 'Are you going to get marks for this project?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
