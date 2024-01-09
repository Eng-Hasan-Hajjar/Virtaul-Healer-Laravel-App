<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QEyesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsEye::create([
            'question' => 'هل تعاني من ضبابية الرؤية أو تشوش في الرؤية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsEye::create([
            'question' => 'هل هناك ألم في العين أو حولها؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsEye::create([
            'question' => 'هل تشعر بالحكة أو الحرقة في العينين؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsEye::create([
            'question' => 'هل تعاني من صداع أو آلام في الجبين؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsEye::create([
            'question' => 'هل توجد تغيرات في لون الحدقة أو حجمها؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsEye::create([
            'question' => 'هل هناك تغيرات في الرؤية الليلية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsEye::create([
            'question' => 'هل تشعر بأن العينين جافتين بشكل زائد؟',
              'answer_type' => 'YesNo',
         ]);
          \App\Models\QuestionsEye::create([
            'question' => 'هل تشعر بأن العينين رطبتين بشكل زائد؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsEye::create([
            'question' => 'هل تلاحظ وجود أي إفرازات غير طبيعية؟',
              'answer_type' => 'YesNo',
         ]);
    }
}
