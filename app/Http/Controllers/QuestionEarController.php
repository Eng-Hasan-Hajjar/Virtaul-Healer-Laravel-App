<?php

namespace App\Http\Controllers;

use App\Models\QuestionsEar;
use Illuminate\Http\Request;
use App\Models\Diagnosis;

class QuestionEarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsEar = QuestionsEar::all();
        return view('questions.ear.index', compact('questionsEar'));
    }
    public function submitEar(Request $request)
    {
          $description = "";
          $description1 = "";
          $description2 = "";
          $description3 = "";
          $description4 = "";
          $description5 = "";
          $description6 = "";
          $description7 = "";

          $questionsLungcount=QuestionsEar::all()->count();
          $answers = $request->all();

          $yesAnswersCount = 0;
          $noAnswersCount = 0;
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsEar = QuestionsEar::all();

            // تفاصيل الأسئلة
            foreach ($questionsEar as $question) {
                $answer = $answers['answer_' . $question->id] ?? 'لم يتم الإجابة';

                if($question->id == 1 && $answer == 'No' ){   $description1=  " انت لا تعاني من ألم في الأذن" . "<br><br>"; }
                else  if($question->id == 1 && $answer == 'Yes' ){$description1= "أنت تعاني من ألم في الأذن". "<br><br>";}

                if($question->id == 2 && $answer == 'No' ){  $description2= "رائع انه ليس هناك تورم أو احمرار في الأذن". "<br><br>"; }
                else if($question->id == 2 && $answer == 'Yes' ) {$description2= "بما أن هناك تورم أو احمرار في الأذن عليك أخذ دواء اسمه". "<br><br>";}

                if($question->id == 3 && $answer == 'No' ){  $description3= "لا تعاني من فقدان في السمع هذا رائع". "<br><br>"; }
                else  if($question->id == 3 && $answer == 'Yes' ){$description3= "بما أنه تعاني من فقدان في السمع عليك اخذ الدواء ". "<br><br>";}

                if($question->id == 4 && $answer == 'No' ){   $description4= "لا توجد إفرازات من الأذن". "<br><br>"; }
                else  if($question->id == 4 && $answer == 'Yes' ){$description4= "توجد إفرازات من الأذن". "<br><br>";}

                if($question->id == 5 && $answer == 'No' ){  $description5= "لا تعاني من دوخة أو اضطرابات في التوازن". "<br><br>"; }
                else  if($question->id == 5 && $answer == 'Yes' ){$description5=  "تعاني من دوخة أو اضطرابات في التوازن".  "<br><br>";}

                if($question->id == 6 && $answer == 'No' ){    $description6= "لا تشعر بالصداع أو الضغط في الرأس". "<br><br>"; }
                else  if($question->id == 6 && $answer == 'Yes' ){$description6= "تشعر بالصداع أو الضغط في الرأس".  "<br><br>";}

            }


            $description = $description1.$description2.$description3.$description4.$description5.$description6;
            foreach ($answers as $answer) {
                if ($answer == 'Yes') {
                    $yesAnswersCount++;
                }
                else {
                    $noAnswersCount++;
                }
            }

            if ($yesAnswersCount >= 2) {
                if ($yesAnswersCount >= 3) {
                    if ($yesAnswersCount >= 4) {
                        $diagnosis = "انك تعاني من حالة شديدة. من الضروري الاتصال بالطبيب الخاص بك فوراً.";
                    } else {
                        $diagnosis = "   لديك مشكلة   . يُفضل استشارةالطبيب الخاص بك.";
                    }
                }else{
                    $diagnosis = "   لديك مشكلة في  التنفسي. ";
                }
            } else {
                $diagnosis = "لا يبدو أن هناك حالة خطيرة. يمكنك متابعة وضعك، ولكن إذا كانت هناك أية مشاكل، يجب عليك استشارة الطبيب.";
            }

            $yesAnswersCountpercent= $yesAnswersCount * 100 / $questionsLungcount ;

            if ($yesAnswersCountpercent >= 20) {
                if ($yesAnswersCountpercent >= 30) {
                    if ($yesAnswersCountpercent >= 40) {
                        if ($yesAnswersCountpercent >= 50) {
                            if ($yesAnswersCountpercent >= 60) {
                                if ($yesAnswersCountpercent >= 70) {
                                    if ($yesAnswersCountpercent >= 80) {
                                        if ($yesAnswersCountpercent >= 90) {
                                                           $diagnosisdb = Diagnosis::find(27);
                                        }
                                             $diagnosisdb = Diagnosis::find(26);
                                    }
                                         $diagnosisdb = Diagnosis::find(26);
                                }
                                     $diagnosisdb = Diagnosis::find(25);
                            }
                                 $diagnosisdb = Diagnosis::find(24);
                        }
                             $diagnosisdb = Diagnosis::find(24);
                    }
                         $diagnosisdb = Diagnosis::find(23);
                }
                     $diagnosisdb = Diagnosis::find(23);
            }

            $id = $diagnosisdb->id;
            $descriptiondb = $diagnosisdb->description;


            return view('outdescription', compact('description','diagnosis','descriptiondb','yesAnswersCount','yesAnswersCountpercent'));


    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questionsEars = QuestionsEar::latest()->paginate(5);

        return view('doctor.crudquestions.ear.index',compact('questionsEars'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.ear.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsEar::create($request->all());

        return redirect()->route('questionsEar.index')
                        ->with('success','questionsEars created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsEar $questionsEar)
    {
        return view('doctor.crudquestions.ear.show',compact('questionsEar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsEar $questionsEar)
    {
        return view('doctor.crudquestions.ear.edit',compact('questionsEar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsEar $questionsEar)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsEar->update($request->all());

        return redirect()->route('questionsEar.index')
                        ->with('success','questionsEar updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsEar $questionsEar)
    {
        $questionsEar->delete();

        return redirect()->route('questionsEar.index')
                        ->with('success','questionsEar deleted successfully');
    }
}
