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
            ///////////////////////////////////////////////////////////////////////////---------lung 7
        \App\Models\Diagnosis::create([
            'description' => '
            التليف الكيسي: مرض وراثي يؤثر على الجهاز التنفسي ويتسبب في تكوين مخاط كثيف في الرئتين.
            ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '

            الارتجاع الحمضي: قد يؤدي ارتداد الحمض من المعدة إلى التهاب الرئة وصعوبات في التنفس.
            ',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            الربو: حالة مزمنة تؤثر على الشعب الهوائية وتسبب صعوبة في التنفس نتيجة لتقلص وتورم الشعب الهوائية.
            ',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            مراض الانسداد الرئوي الاحتقاني: تشمل الأمراض التي تسبب انسداداً في مجرى الهواء، مثل الانسداد الرئوي المزمن.
            ',

         ]);

        \App\Models\Diagnosis::create([
            'description' => '
            	التهاب الشعب الهوائية المزمن
            حالة تتضمن تضيق الشعب الهوائية وتلف الأنسجة الرئوية، وتشمل الأمراض مثل الانسداد الرئوي المزمن والتهاب القصبات.

            ',

         ]);



         \App\Models\Diagnosis::create([
            'description' => '
            التهاب الرئة: حالة تتمثل في التهاب الأنسجة الرئوية نتيجة للعدوى أو الالتهابات.
            ',

         ]);



         \App\Models\Diagnosis::create([
            'description' => '
            سرطان الرئة: نمو غير طبيعي للخلايا الرئوية قد يؤدي إلى وجود كتلة أو ورم في الرئة.
            ',

         ]);
         ///////////////////////////////////////////////////////////////////////////---------brain 5
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
            التهاب البلعوم الحاد
            حالة تهيج وتورم في البلعوم، يمكن أن يكون السبب عدوى أو تهيج بسبب العوامل البيئية.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            انسداد البلعوم
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
            الوردية
             حالة تسبب احمرارًا في الوجه وقد تظهر عروقًا دموية صغيرة.
',

         ]);

         //////////////////////////////////////////////////-----------------------Ear * 5
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب الأذن الوسطى
                 التهاب في الأذن الوسطى يسبب ألمًا وقد يصاحبه ارتفاع في درجة الحرارة.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            الدوار
          حالة تسبب إحساسًا بالدوران أو عدم الاستقرار، وقد يكون ناتجًا عن مشاكل في الأذن الداخلية.
',

         ]);

         \App\Models\Diagnosis::create([
            'description' => '
            تكون قيح الأذن
             حالة التهاب في القناة السمعية الخارجية، يمكن أن يسبب ألمًا واحمرارًا.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            انسداد الأذن
                 انسداد أو ازدحام في الأذن يمكن أن يكون ناتجًا عن تراكم الشمع أو التهاب.
',

         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            فقدان السمع
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

         /////////////////////////////////-------------------المعدة * 3
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب المعدة
            حالة التهابية تؤثر على بطانة المعدة، يمكن أن تسبب ألمًا واضطرابات في الهضم، وعادةً ما يمكن علاجها بفعالية.

           ',
         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            اضطرابات حموضة المعدة
             انسداد حمض المعدة إلى المريء، مما يسبب حرقة في الصدر واضطرابات في الهضم، يمكن عادةً معالجتها بوسائل بسيطة.

           ',
         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            قرحة المعدة
            قرحة في بطانة المعدة أو الأمعاء الدقيقة، يمكن أن تسبب ألمًا حادًا وحرقة في الجزء العلوي من البطن، ولكن يمكن علاجها.

           ',
         ]);

         /////////////////////////////////-------------------الكلية * 7
         \App\Models\Diagnosis::create([
            'description' => '
            فشل الكلى المزمن
             يعتبر فشل الكلى المزمن أكثر خطورة عندما يتطور بشكل تدريجي ويؤدي إلى تقليل وظيفة الكلى على مدى وقت طويل.

           ',
         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            حصوات الكلى
          حصوات الكلى يمكن أن تسبب ألمًا حادًا ومشاكل في الجهاز البولي، ولكن غالبًا ما يكون العلاج فعالًا.

           ',
         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب الكلية الحاد
              يمكن أن يكون خطيرًا خاصةً إذا لم يتم التعامل معه بشكل صحيح، حيث يمكن أن يؤدي إلى أضرار في الكلى.

           ',
         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التهاب الأمعاء التقرحي
            على الرغم من أنها حالة مزمنة، إلا أن إدارتها يمكن أن تختلف وقد تكون تأثيراتها متغيرة.

           ',
         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التضخم الكلوي
            يمكن أن يكون خطيرًا عندما يتسبب في تلف الكليتين وتقليل وظيفتهما.

           ',
         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            اضطراب الفقرات الكلوية
             يؤثر على العظام ولكن ليس بشكل مباشر على وظيفة الكلى.

           ',
         ]);
         \App\Models\Diagnosis::create([
            'description' => '
            التسلخ الكلوي
            قد يكون خطيرًا حين يؤثر على وحدات الترشيح في الكليتين، ويمكن أن يسبب فقدانًا للبروتين وضغط دم مرتفع.

           ',
         ]);
       /////////////////////////////////-------------------الظهر * 15

       \App\Models\Diagnosis::create([
        'description' => '
        التواء العضلات (Muscle Strain):
        حالة شائعة تحدث نتيجة للإجهاد الزائد على العضلات، غالبًا ما تكون أقل خطورة.
       ',
     ]);
     \App\Models\Diagnosis::create([
        'description' => '
        التهاب المفاصل الظهري (Facet Joint Arthritis):
   التهاب المفاصل في الظهر قد يسبب ألمًا وتصلبًا، لكنه عادة لا يكون خطيرًا.

       ',
     ]);
     \App\Models\Diagnosis::create([
        'description' => '
        انزلاق الديسك (Herniated Disc):
   انزلاق قرص بين الفقرات، قد يسبب ألمًا وتنميل، ولكن لا يكون دائمًا خطيرًا.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        التواء الرباط الوتدي (Ligament Sprain):
   إصابة للرباط الذي يربط الفقرات، قد تكون مؤلمة ولكن غالبًا ما تكون خفيفة.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        التهاب الديسك (Discitis):
   التهاب القرص الفقري، يمكن أن يكون خطيرًا في بعض الحالات، ولكن ليس دائمًا.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        فقر الدم الوحشي (Sickle Cell Disease):
   حالة وراثية تؤثر على الدم، وقد تسبب ألمًا في الظهر.

       ',
     ]);
     \App\Models\Diagnosis::create([
        'description' => '
        التهاب المفاصل التأموري (Ankylosing Spondylitis):
        حالة مزمنة تؤثر على المفاصل الظهرية، يمكن أن تتسبب في تصلب وألم.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        التصلب المتعدد (Multiple Sclerosis):
   حالة تؤثر على الجهاز العصبي، وتسبب أحيانًا ألمًا في الظهر.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        ورم العظم الليفي (Osteosarcoma):
   نوع نادر من أورام العظام قد يؤثر على الفقرات.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        فقر الدم (Anemia):
    انخفاض نسبة الهيموغلوبين في الدم، قد يسبب ضعفًا وألمًا في الظهر.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        فقر الدم الناتج عن نقص الحديد (Iron Deficiency Anemia):
    نقص الحديد يمكن أن يسبب ألمًا في الظهر.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        سرطان العظم (Bone Cancer):
    ورم خبيث يمكن أن يؤثر على العظام، قد يسبب ألمًا حادًا.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        فقر الدم الناتج عن نقص فيتامين B12 (Vitamin B12 Deficiency Anemia):
        نقص فيتامين B12 يمكن أن يسبب ألمًا في الظهر.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        فقر الدم الناتج عن فقدان الدم (Hemorrhagic Anemia):
    فقدان كمية كبيرة من الدم يمكن أن يسبب ألمًا في الظهر.

       ',
     ]);

     \App\Models\Diagnosis::create([
        'description' => '
        ورم العظم الليفي القصبي (Ewing Sarcoma):
    ورم شبابي شديد الخطورة قد يؤثر على العظام.

       ',
     ]);

    }
}
