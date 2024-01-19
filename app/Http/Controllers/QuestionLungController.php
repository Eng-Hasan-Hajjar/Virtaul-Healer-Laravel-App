<?php

namespace App\Http\Controllers;
use App\Models\QuestionsLung;
use Illuminate\Http\Request;

class QuestionLungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questionsLung = QuestionsLung::all();
        return view('questions.Lung.index', compact('questionsLung'));
    }
    public function submitLung(Request $request)
    {
          $description = "";

            $answers = $request->all();
            $yesAnswersCount = 0;
            $noAnswersCount = 0;
               // تحديد عدد الإجابات "نعم"
            foreach ($answers as $answer) {
                if ($answer == 'نعم') {
                    $yesAnswersCount++;
                }
                else {
                    $noAnswersCount++;
                }
    }

    // قاعدة بسيطة: إذا كانت هناك 3 إجابات "نعم" أو أكثر، فقد تكون هناك حالة معينة
    if ($yesAnswersCount >= 2) {
        if ($yesAnswersCount >= 3) {
            if ($yesAnswersCount >= 4) {
                $diagnosis = "ربما تعاني من حالة معينة شديدة. من الضروري الاتصال بالطبيب فوراً.";
            } else {
                $diagnosis = "قد تكون لديك مشكلة في الجهاز التنفسي. يُفضل استشارة الطبيب.";
            }
        }else{
        $diagnosis = "قد تكون لديك حالة معينة. نوصي بالتحقق من طبيبك.";
    }
    } else {
        $diagnosis = "لا يبدو أن هناك حالة خطيرة. يمكنك متابعة وضعك، ولكن إذا كانت هناك أية مشاكل، يجب عليك استشارة الطبيب.";
    }
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsLung = QuestionsLung::all();

            // تفاصيل الأسئلة
            foreach ($questionsLung as $question) {
                $answer = $answers['answer_' . $question->id] ?? 'لم يتم الإجابة';

                if($question->id == 1 && $answer == 'No' ){   $description1=  " انت لا تعاني من السعال " . ""; }
                else  if($question->id == 1 && $answer == 'Yes' ){$description1=  " انت تعاني من السعلة". "";}

                if($question->id == 2 && $answer == 'No' ){  $description2= " انت لا تدخن "  . " "; }
                else if($question->id == 2 && $answer == 'Yes' ) {$description2=  " وانت تدخن " . "يجب أن تخفف من التدخين". "";}

                if($question->id == 3 && $answer == 'No' ){  $description3= " لايوجد الم بالحلق "  . " "; }
                else  if($question->id == 3 && $answer == 'Yes' ){$description3=  " ويوجد الم في الحلق". " ";}

                if($question->id == 4 && $answer == 'No' ){   $description4= " ولايوجد ألم في الصدر"  . " "; }
                else  if($question->id == 4 && $answer == 'Yes' ){$description4=  " ويوجد الم في الصدر". " ";}

                if($question->id == 5 && $answer == 'No' ){  $description5= " والسعال ليس جاف"  . " "; }
                else  if($question->id == 5 && $answer == 'Yes' ){$description5=  "والسعال جاف  ". " ";}

                if($question->id == 6 && $answer == 'No' ){    $description6= " لايوجد افرازات مثل بلغم "  . " "; }
                else  if($question->id == 6 && $answer == 'Yes' ){$description6=  "والسعال مصحوب بافرازات  ". " ";}

            }


            $description = $description1.$description2.$description3.$description4.$description5.$description6;

            return view('outdescription', compact('description','diagnosis'));
    }


    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
