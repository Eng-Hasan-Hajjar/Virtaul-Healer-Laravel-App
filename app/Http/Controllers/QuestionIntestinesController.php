<?php

namespace App\Http\Controllers;
use App\Models\Diagnosis;
use App\Models\QuestionsIntestines;
use Illuminate\Http\Request;

class QuestionIntestinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsIntestines = QuestionsIntestines::all();
        return view('questions.intestines.index', compact('questionsIntestines'));

    }
    public function submitIntestines(Request $request)
    {
          $description = "";
          $description1 = "";
          $description2 = "";
          $description3 = "";
          $description4 = "";
          $description5 = "";
          $description6 = "";
          $description7 = "";

          $questionsLungcount=QuestionsIntestines::all()->count();
          $answers = $request->all();

          $yesAnswersCount = 0;
          $noAnswersCount = 0;
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsIntestines = QuestionsIntestines::all();

            // تفاصيل الأسئلة
            foreach ($questionsIntestines as $question) {
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
                                                           $diagnosisdb = Diagnosis::find(44);
                                        }
                                        else        $diagnosisdb = Diagnosis::find(43);
                                    }
                                    else        $diagnosisdb = Diagnosis::find(43);
                                }
                                else       $diagnosisdb = Diagnosis::find(42);
                            }
                            else       $diagnosisdb = Diagnosis::find(41);
                        }
                        else      $diagnosisdb = Diagnosis::find(40);
                    }
                    else       $diagnosisdb = Diagnosis::find(39);
                }
                else      $diagnosisdb = Diagnosis::find(38);
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
        $questionsIntestines = QuestionsIntestines::latest()->paginate(5);

        return view('doctor.crudquestions.intestines.index',compact('questionsIntestines'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.intestines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsIntestines::create($request->all());

        return redirect()->route('questionsIntestine.index')
                        ->with('success','questionsIntestine created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsIntestines $questionsIntestine)
    {
        return view('doctor.crudquestions.intestines.show',compact('questionsIntestine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsIntestines $questionsIntestine)
    {
        return view('doctor.crudquestions.intestines.edit',compact('questionsIntestine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsIntestines $questionsIntestine)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsIntestine->update($request->all());

        return redirect()->route('questionsIntestine.index')
                        ->with('success','questionsIntestine updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsIntestines $questionsIntestine)
    {
        $questionsIntestine->delete();

        return redirect()->route('questionsIntestine.index')
                        ->with('success','questionsIntestine deleted successfully');
    }
}
