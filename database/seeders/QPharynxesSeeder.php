<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QPharynxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsPharynx::create([
            'question' => 'هل تعاني من صعوبة في البلع؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل هناك ألم عند البلع؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل تشعر بالانسداد أو العائق أثناء البلع؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل الألم ثابت ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل الألم يحدث بشكل عرضي؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل تعاني من حرقة في المريء ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل تعاني من حرقة في الصدر؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل هناك تغيير في الوزن بشكل غير مفسر؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل تعاني من سعال مزمن ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsPharynx::create([
            'question' => 'هل تعاني من قرحة حلق؟',
              'answer_type' => 'YesNo',
         ]);
    }
}
