<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\QuestionsSkin;
use Illuminate\Http\Request;

class QuestionSkinController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsSkin = QuestionsSkin::all();
    return view('questions.skin.index', compact('questionsSkin'));

    }
    public function submitSkin(Request $request)
    {
          $description = "";
          $description1 = "";
          $description2 = "";
          $description3 = "";
          $description4 = "";
          $description5 = "";
          $description6 = "";
          $description7 = "";

          $questionsSkincount=QuestionsSkin::all()->count();
          $answers = $request->all();

          $yesAnswersCount = 0;
          $noAnswersCount = 0;
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsSkin = QuestionsSkin::all();

            // تفاصيل الأسئلة
            foreach ($questionsSkin as $question) {
                $answer = $answers['answer_' . $question->id] ?? 'لم يتم الإجابة';

                if($question->id == 1 && $answer == 'No' ){   $description1=  " " . ""; }
                else  if($question->id == 1 && $answer == 'Yes' ){$description1= "". "";}

                if($question->id == 2 && $answer == 'No' ){  $description2=  ""; }
                else if($question->id == 2 && $answer == 'Yes' ) {$description2=  "";}

                if($question->id == 3 && $answer == 'No' ){  $description3=  ""; }
                else  if($question->id == 3 && $answer == 'Yes' ){$description3=  "";}

                if($question->id == 4 && $answer == 'No' ){   $description4=  ""; }
                else  if($question->id == 4 && $answer == 'Yes' ){$description4=  "";}

                if($question->id == 5 && $answer == 'No' ){  $description5= ""; }
                else  if($question->id == 5 && $answer == 'Yes' ){$description5=   "";}

                if($question->id == 6 && $answer == 'No' ){    $description6=  ""; }
                else  if($question->id == 6 && $answer == 'Yes' ){$description6=   "";}

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

            $yesAnswersCountpercent= $yesAnswersCount * 100 / $questionsSkincount ;

            if ($yesAnswersCountpercent >= 20) {
                if ($yesAnswersCountpercent >= 30) {
                    if ($yesAnswersCountpercent >= 40) {
                        if ($yesAnswersCountpercent >= 50) {
                            if ($yesAnswersCountpercent >= 60) {
                                if ($yesAnswersCountpercent >= 70) {
                                    if ($yesAnswersCountpercent >= 80) {
                                        if ($yesAnswersCountpercent >= 90) {
                                                           $diagnosisdb = Diagnosis::find(18);
                                        }
                                             $diagnosisdb = Diagnosis::find(22);
                                    }
                                         $diagnosisdb = Diagnosis::find(21);
                                }
                                     $diagnosisdb = Diagnosis::find(21);
                            }
                                 $diagnosisdb = Diagnosis::find(20);
                        }
                             $diagnosisdb = Diagnosis::find(20);
                    }
                         $diagnosisdb = Diagnosis::find(19);
                }
                     $diagnosisdb = Diagnosis::find(19);
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
        $questionsSkins = QuestionsSkin::latest()->paginate(5);

        return view('doctor.crudquestions.skin.index',compact('questionsSkins'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.skin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsSkin::create($request->all());

        return redirect()->route('questionsSkin.index')
                        ->with('success','questionsSkin created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsSkin $questionsSkin)
    {
        return view('doctor.crudquestions.skin.show',compact('questionsSkin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsSkin $questionsSkin)
    {
        return view('doctor.crudquestions.skin.edit',compact('questionsSkin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsSkin $questionsSkin)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsSkin->update($request->all());

        return redirect()->route('questionsSkin.index')
                        ->with('success','questionsSkin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsSkin $questionsSkin)
    {
        $questionsSkin->delete();

        return redirect()->route('questionsSkin.index')
                        ->with('success','questionsSkin deleted successfully');
    }

}
