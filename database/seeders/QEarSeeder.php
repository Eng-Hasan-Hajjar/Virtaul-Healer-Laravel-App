<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QEarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsEar::create([
             'question' => 'هل تعاني من ألم في الأذن؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsEar::create([
            'question' => 'هل هناك تورم أو احمرار في الأذن؟',
             'answer_type' => 'YesNo',
        ]);
        \App\Models\QuestionsEar::create([
            'question' => 'هل تعاني من فقدان في السمع؟',
             'answer_type' => 'YesNo',
        ]);
        \App\Models\QuestionsEar::create([
            'question' => 'هل توجد إفرازات من الأذن؟',
             'answer_type' => 'YesNo',
        ]);
        \App\Models\QuestionsEar::create([
            'question' => 'هل تعاني من دوخة أو اضطرابات في التوازن؟',
             'answer_type' => 'YesNo',
        ]);
        \App\Models\QuestionsEar::create([
            'question' => 'هل تشعر بالصداع أو الضغط في الرأس؟',
             'answer_type' => 'YesNo',
        ]);
        \App\Models\QuestionsEar::create([
            'question' => 'هل تعاني من حكة داخل الأذن؟',
             'answer_type' => 'YesNo',
        ]);
        \App\Models\QuestionsEar::create([
            'question' => 'هل كنت عرضة للبرد أو الإنفلونزا مؤخرًا؟',
             'answer_type' => 'YesNo',
        ]);
    }
}
