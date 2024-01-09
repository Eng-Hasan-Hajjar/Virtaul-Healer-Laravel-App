<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QBackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsBack::create([
            'question' => 'هل الألم حاد ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBack::create([
            'question' => 'هل الألم يشتد ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBack::create([
            'question' => 'هل الألم يخف في أوضاع معينة؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBack::create([
            'question' => 'هل هناك أي عوامل نفسية قد تكون مرتبطة بالألم؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsBack::create([
            'question' => 'هل تعاني من حالات طبية مزمنة أخرى؟ ثل التهاب المفاصل، أو اضطرابات الجهاز الهضمي?',
              'answer_type' => 'YesNo',
         ]);

    }
}
