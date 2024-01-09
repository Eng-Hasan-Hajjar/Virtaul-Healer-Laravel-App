<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QStomachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsStomach::create([
            'question' => 'هل الألم متواصل أو يحدث بشكل متقطع؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsStomach::create([
            'question' => 'هل توجد عوامل تزيد من الألم؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsStomach::create([
            'question' => 'هل هناك علاقة بين الألم والتوتر النفسي؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsStomach::create([
            'question' => 'هل هناك تغيرات في عادات الإخراج؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsStomach::create([
            'question' => 'هل تعاني من الغثيان أو التقيؤ؟',
              'answer_type' => 'YesNo',
         ]);

    }
}
