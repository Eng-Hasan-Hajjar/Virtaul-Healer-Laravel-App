<?php

namespace App\Http\Controllers;

use App\Models\QuestionsBack;
use App\Models\Diagnosis;

use Illuminate\Http\Request;

class QuestionBackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsBack = QuestionsBack::all();
        return view('questions.back.index', compact('questionsBack'));
    }
    public function submitBack(Request $request)
    {
             $description = "";
             $description1 = "";
             $description2 = "";
             $description3 = "";
             $description4 = "";
             $description5 = "";
             $description6 = "";
             $description7 = "";

             $questionsLungcount=QuestionsBack::all()->count();
             $answers = $request->all();

             $yesAnswersCount = 0;
             $noAnswersCount = 0;

            // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsLung = QuestionsBack::all();

            // تفاصيل الأسئلة
            foreach ($questionsLung as $question) {

                $answer = $answers['answer_' . $question->id] ?? 'لم يتم الإجابة';

                if($question->id == 1 && $answer == 'No' ){   $description1=  "الألم حاد". "<br><br>"; }
                else  if($question->id == 1 && $answer == 'Yes' ){$description1= "بما أن الألم حاد "."<br><br>";}

                if($question->id == 2 && $answer == 'No' ){  $description2= "ولكنه ثابت لا يشتد". "<br><br>"; }
                else if($question->id == 2 && $answer == 'Yes' ) {$description2= "وبما أنه يشتد الألم".  "<br><br>";}

                if($question->id == 3 && $answer == 'No' ){  $description3= "بما أن الألم لا يخف في أوضاع معينة اذا عليك استشارة طبيب". "<br><br>"; }
                else  if($question->id == 3 && $answer == 'Yes' ){$description3= "بما أنه يخف الألم في أوضاع معينة اذا عليك أن تقوم بأخذ اكثير من الراحة ".  "<br><br>";}

                if($question->id == 4 && $answer == 'No' ){   $description4= "بما انه  لايوجد عوامل نفسية تؤثر هذه نقطة ايجابية ". "<br><br>"; }
                else  if($question->id == 4 && $answer == 'Yes' ){$description4= "عليك أن تقوم ببعض عمليات الرفاهية والتقليل من التفكير". "<br><br>";}

                if($question->id == 5 && $answer == 'No' ){  $description5= "لايوجد حالات طبية مزمنة". "<br><br>"; }
                else  if($question->id == 5 && $answer == 'Yes' ){$description5= " يوجد حالات طبية مزكنة لذلك لايمكن اعطاءك الكثير من الأدوية". "<br><br>";}

            }


            $description = $description1.$description2.$description3.$description4.$description5;

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
                                                           $diagnosisdb = Diagnosis::find(62);
                                        }
                                             $diagnosisdb = Diagnosis::find(61);
                                    }
                                         $diagnosisdb = Diagnosis::find(60);
                                }
                                     $diagnosisdb = Diagnosis::find(59);
                            }
                                 $diagnosisdb = Diagnosis::find(58);
                        }
                             $diagnosisdb = Diagnosis::find(57);
                    }
                         $diagnosisdb = Diagnosis::find(56);
                }
                     $diagnosisdb = Diagnosis::find(55);
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
        $questionsBacks = QuestionsBack::latest()->paginate(5);

        return view('doctor.crudquestions.back.index',compact('questionsBacks'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.back.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsBack::create($request->all());

        return redirect()->route('questionsBack.index')
                        ->with('success','questionsBack created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsBack $questionsBack)
    {
        return view('doctor.crudquestions.back.show',compact('questionsBack'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsBack $questionsBack)
    {
        return view('doctor.crudquestions.back.edit',compact('questionsBack'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsBack $questionsBack)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsBack->update($request->all());

        return redirect()->route('questionsBack.index')
                        ->with('success','questionsBack updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsBack $questionsBack)
    {
        $questionsBack->delete();

        return redirect()->route('questionsBack.index')
                        ->with('success','questionsBack deleted successfully');
    }
}
