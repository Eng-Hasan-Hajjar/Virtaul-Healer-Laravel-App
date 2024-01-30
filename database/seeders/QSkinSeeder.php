<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QSkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsSkin::create([
            'question' => 'هل لاحظت تغييرًا مفاجئًا في لون أو شكل أي جزء من بشرتك؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل تعاني من حكة شديدة أو ألم في الجلد؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل قمت بتغيير مستحضرات العناية بالبشرة أو استخدمت منتجات جديدة مؤخرًا؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل كنت تتعرض لأشعة الشمس بشكل مكثف دون استخدام واقي الشمس؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل تعاني من أمراض تحسسية أو حساسية جلدية معروفة؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل لديك تاريخ عائلي لأمراض جلدية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل تعاني من أمراض مزمنة أخرى مثل السكري أو الأمراض الروماتيزمية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل تشعر بأي تغير في درجة الحرارة أو الرطوبة يؤثر على حالة بشرتك؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل قمت بزيارة أماكن جديدة أو تعرضت للحشرات مؤخرًا؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsSkin::create([
            'question' => 'هل لاحظت تفاقم الأعراض بعد تناول أطعمة أو مشروبات معينة؟',
              'answer_type' => 'YesNo',
         ]);
    }
}
