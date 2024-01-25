<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Diagnosis::create([
            'description' => '
            	التهاب الشعب الهوائية المزمن (COPD)
            حالة تتضمن تضيق الشعب الهوائية وتلف الأنسجة الرئوية، وتشمل الأمراض مثل الانسداد الرئوي المزمن والتهاب القصبات.

            ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            الربو: حالة مزمنة تؤثر على الشعب الهوائية وتسبب صعوبة في التنفس نتيجة لتقلص وتورم الشعب الهوائية.
            ',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            التليف الكيسي: مرض وراثي يؤثر على الجهاز التنفسي ويتسبب في تكوين مخاط كثيف في الرئتين.
            ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب الرئة: حالة تتمثل في التهاب الأنسجة الرئوية نتيجة للعدوى أو الالتهابات.
            ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '

            الارتجاع الحمضي: قد يؤدي ارتداد الحمض من المعدة إلى التهاب الرئة وصعوبات في التنفس.
            ',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            مراض الانسداد الرئوي الاحتقاني: تشمل الأمراض التي تسبب انسداداً في مجرى الهواء، مثل الانسداد الرئوي المزمن.
            ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            سرطان الرئة: نمو غير طبيعي للخلايا الرئوية قد يؤدي إلى وجود كتلة أو ورم في الرئة.
            ',

         ]);
         ///////////////////////////////////////////////////////////////////////////---------brain
         \App\Models\Diagnosis::create([
            'description' => '
            السكتة الدماغية (Stroke):
   تحدث عند انقطاع تدفق الدم إلى جزء من الدماغ، مما يؤدي إلى فقدان وظائف الدماغ وقد يسبب ضعفًا وفقدان الوعي.

            ',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            الصداع النصفي (Migraine):
   نوع من الصداع يتسم بألم حاد ونبضات في الجهة الواحدة من الرأس، وقد يصاحبها غثيان وحساسية للأضواء.

            ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            الزهايمر (Alzheimer s Disease):
   حالة تتسم بفقدان التذكر التدريجي وتدهور الوظائف العقلية، وهي شائعة في كبار السن.

            ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            الصرع (Epilepsy):
   اضطراب يسبب نشاطًا كهربائيًا غير طبيعي في الدماغ، مما يؤدي إلى نوبات وفقدان الوعي.

            ',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            ورم الدماغ (Brain Tumor):
   نمو غير طبيعي للخلايا داخل الدماغ، وقد يسبب أعراضًا مثل الصداع والتشنجات وتغيرات في الحالة العقلية.
',

         ]);

         ///////////////////////////////////////////////////---------------------------------------pharynx * 5
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب البلعوم (Pharyngitis):
            التهاب في البلعوم يسبب ألمًا واحتقانًا وقد يكون ناتجًا عن عدوى فيروسية أو بكتيرية.
         ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب اللوزتين (Tonsillitis):
   التهاب في اللوزتين يسبب صعوبة في البلع وألمًا في الحلق، وقد يكون ناتجًا عن عدوى.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            تضخم اللوزتين (Enlarged Tonsils):
   زيادة في حجم اللوزتين قد تسبب صعوبة في التنفس والبلع، وتحدث في العديد من الحالات.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب البلعوم الحاد (Acute Pharyngitis):
   حالة تهيج وتورم في البلعوم، يمكن أن يكون السبب عدوى أو تهيج بسبب العوامل البيئية.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            انسداد البلعوم (Pharyngeal Obstruction):
   انسداد في مجرى البلعوم يمكن أن يكون ناتجًا عن أسباب متنوعة، مما يسبب صعوبة في البلع والتنفس.
',

         ]);

       ////////////////////////////////////////-----------------------------------skin
         \App\Models\Diagnosis::create([
            'description' => '
            الصدفية (Psoriasis):
   حالة جلدية مزمنة تتسم بتشكل ترسبات فضفاضة من الجلد واحمراره.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            الأكزيما (Eczema):
   حالة التهابية تسبب جفافًا وحكةً في الجلد، وقد يظهر التهيج والطفح الجلدي.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            حب الشباب (Acne):
   حالة شائعة تسبب ظهور بثور وآفات على البشرة، خاصة في منطقة الوجه.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            الصدفية (Scabies):
   عدوى جلدية تسبب حكةً شديدة وتظهر خطوط صغيرة على الجلد.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            الوردية (Rosacea):
   حالة تسبب احمرارًا في الوجه وقد تظهر عروقًا دموية صغيرة.
',

         ]);

         //////////////////////////////////////////////////-----------------------Ear * 5
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب الأذن الوسطى (Otitis Media):
   التهاب في الأذن الوسطى يسبب ألمًا وقد يصاحبه ارتفاع في درجة الحرارة.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            الدوار (Vertigo):
   حالة تسبب إحساسًا بالدوران أو عدم الاستقرار، وقد يكون ناتجًا عن مشاكل في الأذن الداخلية.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            تكون قيح الأذن (Otitis Externa):
   حالة التهاب في القناة السمعية الخارجية، يمكن أن يسبب ألمًا واحمرارًا.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            انسداد الأذن (Ear Congestion):
   انسداد أو ازدحام في الأذن يمكن أن يكون ناتجًا عن تراكم الشمع أو التهاب.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            فقدان السمع (Hearing Loss):
   خسارة تدريجية للقدرة على السمع، وقد تكون ناتجة عن عوامل متنوعة.
',

         ]);
//////////////////////////////////////----------------------Eye * 5
         \App\Models\Diagnosis::create([
            'description' => 'التهاب الملتحمة (Conjunctivitis):
            التهاب في الغشاء الملتحم الذي يغطي العين، ويمكن أن يكون مصاحبًا للإفرازات والحكة.
         ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => 'الجفون الانقلابي (Entropion):
            انقلاب الجفن داخل العين، مما يسبب تهيجًا وتشوشًا في الرؤية.
         ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => 'التهاب الجفن (Blepharitis):
            التهاب في الجفن يسبب احمرارًا وتورمًا وقد يكون مصاحبًا لتكون القشور.
         ',

         ]);

         \App\Models\Diagnosis::create([
            'description' => 'الحول (Strabismus):
            حالة تتسم بعدم توازن في توجيه العينين، وقد يكون ذلك وضعًا دائمًا أو متقطعًا.
         ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            جفاف العين (Dry Eye Syndrome):
   انخفاض في إنتاج الدموع أو جودة الدموع يمكن أن يسبب جفافًا واحمرارًا في العين.
',

         ]);
         //////////////////////////////////////////////////--------------------------------------heart * 5
         \App\Models\Diagnosis::create([
            'description' => '
            ارتفاع ضغط الدم (Hypertension):
   ارتفاع في ضغط الدم يمكن أن يزيد من خطر الأمراض القلبية والسكتة الدماغية.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            انسداد الشرايين التاجية (Coronary Artery Disease):
   تراكم الدهون في الشرايين التاجية يمكن أن يؤدي إلى انسدادها وتقليل تدفق الدم إلى القلب.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            اضطراب ضربات القلب (Arrhythmia):
   عدم انتظام في نبضات القلب يمكن أن يتسبب في خفقان أو بطء في ضربات القلب.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            فشل القلب (Heart Failure):
   حالة يعجز فيها القلب عن ضخ الدم بشكل كافٍ لتلبية احتياجات الجسم.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            التهاب عضلة القلب (Myocarditis):
   التهاب في عضلة القلب يمكن أن يسبب ألمًا في الصدر وضيقًا في التنفس.
',

         ]);
         /////////////////////////////////-------------------intestines * 7
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب الأمعاء التقرحي (Crohn s Disease):
   حالة التهابية مزمنة تؤثر على جدران الأمعاء، وتسبب ألماً في البطن وإسهالاً وفقدان وزن.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب القولون التقرحي (Ulcerative Colitis):
   حالة التهابية تؤثر على القولون والمستقيم، وتتسبب في إسهال مع دم في البراز وألم في البطن.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            متلازمة الأمعاء العصبية (Irritable Bowel Syndrome - IBS):
   حالة اضطراب وظيفي في الأمعاء يتسبب في آلام بطنية وتغيرات في عادات الإخراج دون وجود تلف في الأمعاء.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            القولون العصبي (Nervous Colon):
   حالة تشمل تقلصات وتشنجات في عضلات القولون، مما يسبب ألماً وتقلبات في عادات الإخراج.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب الأمعاء الغشائي (Diverticulitis):
   التهاب يحدث في الكيسات الغشائية الموجودة في جدار الأمعاء، مما يسبب ألماً وتورمًا في البطن.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            انسداد الأمعاء (Intestinal Obstruction):
   حالة تحدث عندما يكون هناك منع في مرور المواد الغذائية أو السوائل عبر الأمعاء، مما يؤدي إلى ألم حاد وقيء.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            حصى الأمعاء (Intestinal Stones):
   تكوين حصى داخل الأمعاء، وقد يسبب ألماً وتورمًا واضطرابات في الهضم.
',

         ]);
    


    }
}
