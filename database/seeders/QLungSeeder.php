<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QLungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\QuestionsLung::create([
            'question' => '؟هل يوجد سعلة ',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => '؟هل تدخن',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => ' ؟هل السعال مصحوب بألم في الحلق',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => '؟هل السعال مصحوب بألم في الصدر',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => '?هل السعال جاف',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => 'هل السعال مصحوب بإفرازات (بلغم)؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => ' هل تعاني من سعال مستمر؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => 'هل يكون السعال أسوأ في الصباح الباكر؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => 'هل يكون السعال أسوأ في الليل ؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => 'هل يوجد إفرازات مخاطية أو قيحية مع السعال؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => 'هل تشعر بضيق في التنفس أو صعوبة في التنفس؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => ' هل كنت تعاني من مشاكل في الجهاز التنفسي في السابق؟',
              'answer_type' => 'YesNo',
         ]);  \App\Models\QuestionsLung::create([
            'question' => 'هل تعاني من حساسية تجاه مواد معينة أو تعرضت لمهيجات قد تؤثر على الرئتين؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => 'هل تعمل في بيئة قد تتسبب في التعرض لمواد مهيجة للرئتين؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\QuestionsLung::create([
            'question' => 'هل تعيش في منطقة تشهد مستويات عالية من التلوث الهوائي؟',
              'answer_type' => 'YesNo',
         ]);

    }
}
