<?php

namespace App\Http\Controllers;
use App\Models\QuestionsPharynx;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class QuestionPharynxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsPharynx = QuestionsPharynx::all();
        return view('questions.pharynx.index', compact('questionsPharynx'));

    }
    public function submitPharynx(Request $request)
    {
          $description = "";
          $description1 = "";
          $description2 = "";
          $description3 = "";
          $description4 = "";
          $description5 = "";
          $description6 = "";
          $description7 = "";

          $questionsLungcount=QuestionsPharynx::all()->count();
          $answers = $request->all();

          $yesAnswersCount = 0;
          $noAnswersCount = 0;
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsPharynx = QuestionsPharynx::all();

            // تفاصيل الأسئلة
            foreach ($questionsPharynx as $question) {
                $answer = $answers['answer_' . $question->id] ?? 'لم يتم الإجابة';

                if($question->id == 1 && $answer == 'No' ){   $description1=  " " . "<br><br>"; }
                else  if($question->id == 1 && $answer == 'Yes' ){$description1= "". "<br><br>";}

                if($question->id == 2 && $answer == 'No' ){  $description2=  "<br><br>"; }
                else if($question->id == 2 && $answer == 'Yes' ) {$description2=  "<br><br>";}

                if($question->id == 3 && $answer == 'No' ){  $description3=  "<br><br>"; }
                else  if($question->id == 3 && $answer == 'Yes' ){$description3=  "<br><br>";}

                if($question->id == 4 && $answer == 'No' ){   $description4=  "<br><br>"; }
                else  if($question->id == 4 && $answer == 'Yes' ){$description4=  "<br><br>";}

                if($question->id == 5 && $answer == 'No' ){  $description5= "<br><br>"; }
                else  if($question->id == 5 && $answer == 'Yes' ){$description5=   "<br><br>";}

                if($question->id == 6 && $answer == 'No' ){    $description6=  "<br><br>"; }
                else  if($question->id == 6 && $answer == 'Yes' ){$description6=   "<br><br>";}

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
                                                           $diagnosisdb = Diagnosis::find(17);
                                        }
                                        else       $diagnosisdb = Diagnosis::find(16);
                                    }
                                    else          $diagnosisdb = Diagnosis::find(15);
                                }
                                else           $diagnosisdb = Diagnosis::find(15);
                            }
                            else        $diagnosisdb = Diagnosis::find(14);
                        }
                        else       $diagnosisdb = Diagnosis::find(14);
                    }
                    else       $diagnosisdb = Diagnosis::find(13);
                }
                else        $diagnosisdb = Diagnosis::find(13);
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
        $questionsPharynxs = QuestionsPharynx::latest()->paginate(5);

        return view('doctor.crudquestions.pharynx.index',compact('questionsPharynxs'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.pharynx.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsPharynx::create($request->all());

        return redirect()->route('questionsPharynx.index')
                        ->with('success','questionsPharynx created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsPharynx $questionsPharynx)
    {
        return view('doctor.crudquestions.pharynx.show',compact('questionsPharynx'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsPharynx $questionsPharynx)
    {
        return view('doctor.crudquestions.pharynx.edit',compact('questionsPharynx'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsPharynx $questionsPharynx)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsPharynx->update($request->all());

        return redirect()->route('questionsPharynx.index')
                        ->with('success','questionsPharynx updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsPharynx $questionsPharynx)
    {
        $questionsPharynx->delete();

        return redirect()->route('questionsPharynx.index')
                        ->with('success','questionsPharynx deleted successfully');
    }
}
