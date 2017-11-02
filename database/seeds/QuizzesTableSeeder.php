<?php

use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('quizzes')->insert([
            'topic' => 'General Aptitude',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \DB::table('quizzes')->insert([
            'topic' => 'Verbal and Reasoning',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \DB::table('quizzes')->insert([
            'topic' => 'Current Affairs & GK',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \DB::table('quizzes')->insert([
            'topic' => 'Programming',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
