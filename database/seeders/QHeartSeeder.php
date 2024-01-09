<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QHeartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsHeart::create([
            'question' => 'هل الألم يترافق مع أعراض أخرى مثل ضيق التنفس؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsHeart::create([
            'question' => 'هل الألم يترافق مع أعراض أخرى مثل التعرق البارد ؟',
              'answer_type' => 'YesNo',
         ]); \App\Models\QuestionsHeart::create([
            'question' => 'هل الألم يترافق مع أعراض أخرى مثل الغثيان ؟',
              'answer_type' => 'YesNo',
         ]); \App\Models\QuestionsHeart::create([
            'question' => 'هل توجد عوامل تزيد من الألم؟ مثل النشاط البدني',
              'answer_type' => 'YesNo',
         ]); \App\Models\QuestionsHeart::create([
            'question' => 'هل تعاني من حالات صحية أخرى مثل السكري ؟',
              'answer_type' => 'YesNo',
         ]); \App\Models\QuestionsHeart::create([
            'question' => 'هل تعاني من حالات صحية أخرى مثل ارتفاع ضغط الدم؟',
              'answer_type' => 'YesNo',
         ]); \App\Models\QuestionsHeart::create([
            'question' => 'هل هناك تاريخ عائلي لأمراض القلب؟',
              'answer_type' => 'YesNo',
         ]);
    }
}
