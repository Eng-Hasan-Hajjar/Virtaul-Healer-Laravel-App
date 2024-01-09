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
    }
}
