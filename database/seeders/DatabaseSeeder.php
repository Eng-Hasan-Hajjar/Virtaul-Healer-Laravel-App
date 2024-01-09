<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
       /* \App\Models\User::create([
            'name' => 'Lama',
           'email' => 'lama@gmail.com',
           'password'=>'123456789',
         ]);*/
        $this->call(QBackSeeder::class);
        $this->call(QBrainSeeder::class);
        $this->call(QEyesSeeder::class);
        $this->call(QHeartSeeder::class);
        $this->call(QIntestinesSeeder::class);
        $this->call(QKidneysSeeder::class);
        $this->call(QLungSeeder::class);
        $this->call(QPharynxesSeeder::class);
        $this->call(QStomachesSeeder::class);

         \App\Models\Question::create([
           'question' => 'هل تعاني من أي حالات صحية سابقة؟',
             'answer_type' => 'YesNo',
        ]);
        \App\Models\Question::create([
            'question' => 'هل كنت تعاني من أمراض مزمنة مثل السكري أو ارتفاع ضغط الدم؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل خضعت لعمليات جراحية سابقة؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'ما هي الأعراض التي تشعر بها حاليًا؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تعاني من ألم في أي جزء من الجسم؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تشعر بالدوار أو فقدان التوازن؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل هناك أي حالات صحية مزمنة في عائلتك؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل هناك تاريخ عائلي لأمراض معينة مثل أمراض القلب أو السرطان؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تتناول أي أدوية حاليًا؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تعاني من أي تحسس أو ردود فعل سابقة للأدوية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تمارس الرياضة بانتظام؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => '    ما نوعية نظامك الغذائي؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تعاني من التوتر النفسي أو القلق؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل كنت عرضة لأي مواد كيميائية أو عوامل بيئية ضارة في مكان العمل؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل كان لديك أي تعرض للإشعاع أو الموجات الكهرومغناطيسية؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'كم عدد ساعات النوم التي تحصل عليها في الليل؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تعاني من أي مشاكل في النوم مثل الأرق؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تواجه أي مشاكل في الهضم مثل صعوبة في البلع أو حرقة المعدة؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تعاني من أي مشاكل في الأمعاء مثل الإمساك أو الإسهال؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تشعر بأي ألم أو تغيير في وظيفة الكلى؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تعاني من أي مشاكل في التبول؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تدخن أو كنت تدخن في الماضي؟',
              'answer_type' => 'YesNo',
         ]);
         \App\Models\Question::create([
            'question' => 'هل تتناول أي كميات من الكحول أو المواد المخدرة؟',
              'answer_type' => 'YesNo',
         ]);



    }
}
