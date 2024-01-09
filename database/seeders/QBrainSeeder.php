<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QBrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsBrain::create([
            'question' => 'هل تعاني من صداع؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل هناك تغيير في النظر أو الرؤية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل توجد مشاكل في التوازن أو الإعتدال؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل هناك أي تغيير في التذوق؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل هناك أي تغيير في السمع ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل هناك أي تغيير في الشم ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل تعاني من تشنجات ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل تعاني من نوبات؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل تشعر الغثيان؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل تشعر بالدوران؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل تعاني من فقدان الذاكرة ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل تعاني من صعوبة في التركيز؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل توجد تغيرات في الحالة العقلية مثل الاكتئاب أو القلق؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBrain::create([
            'question' => 'هل هناك تاريخ عائلي لأمراض الدماغ أو الاضطرابات العصبية؟',
              'answer_type' => 'YesNo',
         ]);
         
    }
}
