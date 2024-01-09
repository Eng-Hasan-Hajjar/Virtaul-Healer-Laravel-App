<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QIntestinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsIntestines::create([
            'question' => 'هل الألم متواصل أو يحدث بشكل متقطع؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsIntestines::create([
            'question' => 'هل تعاني من آلام تصاحبها تقلصات أو تشنجات؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsIntestines::create([
            'question' => 'هل هناك تغيرات في عادات الإخراج؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsIntestines::create([
            'question' => 'هل تعاني من الإمساك ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsIntestines::create([
            'question' => 'هل تعاني من الإسهال؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsIntestines::create([
            'question' => 'هل هناك ألم أو ضغط أثناء التبول؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsIntestines::create([
            'question' => 'هل تعاني من انتفاخ أو غازات بشكل متكرر؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsIntestines::create([
            'question' => 'هل هناك فقدان للوزن غير المبرر أو فقدان للشهية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsIntestines::create([
            'question' => 'هل تعاني من حالات نفسية مثل القلق أو الاكتئاب؟',
              'answer_type' => 'YesNo',
         ]);
       
    }
}
