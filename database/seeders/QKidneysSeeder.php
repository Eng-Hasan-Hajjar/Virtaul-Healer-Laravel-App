<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QKidneysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsKidney::create([
            'question' => 'هل تعاني من ألم في منطقة الكلى؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsKidney::create([
            'question' => 'هل تلاحظ تغيرات في كمية البول؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsKidney::create([
            'question' => 'هل توجد دم في البول؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsKidney::create([
            'question' => 'هل تشعر بالإرهاق أو فقدان للشهية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsKidney::create([
            'question' => 'هل تعاني من ارتفاع ضغط الدم؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsKidney::create([
            'question' => 'هل هناك زاد وزنك الحالي؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsKidney::create([
            'question' => 'هل هناك نقص وزنك الحالي؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsKidney::create([
            'question' => 'هل هناك تورم في الوجه أو الأطراف؟',
              'answer_type' => 'YesNo',
         ]);

    }
}
