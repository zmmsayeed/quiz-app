<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('choices')->insert([
            'question_id' => 1,
            'is_correct' => 0,
            'text' => 'Ramdon Name',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 1,
            'is_correct' => 1,
            'text' => 'Zimam Sayeed',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 1,
            'is_correct' => 0,
            'text' => 'Shah Rukh Khan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 1,
            'is_correct' => 0,
            'text' => 'Hrithik Roshan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 2,
            'is_correct' => 0,
            'text' => 'Computer Networks',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 2,
            'is_correct' => 1,
            'text' => 'Database Management System',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 2,
            'is_correct' => 1,
            'text' => 'Android Application',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 3,
            'is_correct' => 1,
            'text' => 'PHP Laravel',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 3,
            'is_correct' => 0,
            'text' => 'Python Django',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 4,
            'is_correct' => 1,
            'text' => 'Yes',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 4,
            'is_correct' => 0,
            'text' => 'No',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 4,
            'is_correct' => 0,
            'text' => 'Not Sure',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 5,
            'is_correct' => 1,
            'text' => 'Yes',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \DB::table('choices')->insert([
            'question_id' => 5,
            'is_correct' => 0,
            'text' => 'No',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
