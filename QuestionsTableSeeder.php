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

        DB::table('questions')->insert([
            'question_name' => 'what is php?',
            'Answer1' => 'hypertext Prepocedure',
            'Answer2' => 'hypertext markup language',
            'Answer3' => 'Procedure hyper php',
            'Answer4' => 'php',
            'Answer' =>1,

        ]);

        DB::table('questions')->insert([
            'question_name' => 'Who is the father of PHP?',
            'Answer1' => 'Rasmus Lerdorf',
            'Answer2' => 'List Barely',
            'Answer3' => 'Drek Kolkevi',
            'Answer4' => 'Willam Makepiece',
            'Answer' =>1,

        ]);

        DB::table('questions')->insert([
            'question_name' => 'PHP files have a default file extension of.?',
            'Answer1' => '.xml',
            'Answer2' => '.php',
            'Answer3' => '.xl',
            'Answer4' => '.html',
            'Answer' =>2,

        ]);

        DB::table('questions')->insert([
            'question_name' => 'PHP’s numerically indexed array begin with position...?',
            'Answer1' => '1',
            'Answer2' => '2',
            'Answer3' => '0',
            'Answer4' => '-1',
            'Answer' =>3,

        ]);

        DB::table('questions')->insert([
            'question_name' => 'Which of the functions is used to sort an array in...?',
            'Answer1' => 'sort()',
            'Answer2' => 'dsort()',
            'Answer3' => 'asort()',
            'Answer4' => 'rsort()',
            'Answer' =>4,

        ]);
    }
}
