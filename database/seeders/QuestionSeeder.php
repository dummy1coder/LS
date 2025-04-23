<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::insert([
            ['question' => 'What is your name?', 'answer' => 'I am LearnsoftBot!'],
            ['question' => 'What services do you offer?', 'answer' => 'We offer ERP solutions.'],
            ['question' => 'How can I contact support?', 'answer' => 'You can email us at support@example.com'],
        ]);
    }
}
