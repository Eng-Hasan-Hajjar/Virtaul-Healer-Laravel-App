<?php

namespace App\Http\Controllers;
use App\Models\Diagnosis;
use App\Models\QuestionsHeart;
use Illuminate\Http\Request;

class QuestionHeartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsHeart = QuestionsHeart::all();
        return view('questions.heart.index', compact('questionsHeart'));
    }
    public function submitHeart(Request $request)
    {
          $description = "";
          $description1 = "";
          $description2 = "";
          $description3 = "";
          $description4 = "";
          $description5 = "";
          $description6 = "";
          $description7 = "";

          $questionsLungcount=QuestionsHeart::all()->count();
          $answers = $request->all();

          $yesAnswersCount = 0;
          $noAnswersCount = 0;
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsHeart = QuestionsHeart::all();

            // تفاصيل الأسئلة
            foreach ($questionsHeart as $question) {
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
                                                           $diagnosisdb = Diagnosis::find(36);
                                        }
                                        else       $diagnosisdb = Diagnosis::find(37);
                                    }
                                    else           $diagnosisdb = Diagnosis::find(37);
                                }
                                else        $diagnosisdb = Diagnosis::find(35);
                            }
                            else       $diagnosisdb = Diagnosis::find(34);
                        }
                        else      $diagnosisdb = Diagnosis::find(34);
                    }
                    else    $diagnosisdb = Diagnosis::find(33);
                }
                else      $diagnosisdb = Diagnosis::find(33);
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
        $questionsHearts = QuestionsHeart::latest()->paginate(5);

        return view('doctor.crudquestions.heart.index',compact('questionsHearts'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.heart.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsHeart::create($request->all());

        return redirect()->route('questionsHeart.index')
                        ->with('success','questionsHeart created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsHeart $questionsHeart)
    {
        return view('doctor.crudquestions.heart.show',compact('questionsHeart'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsHeart $questionsHeart)
    {
        return view('doctor.crudquestions.heart.edit',compact('questionsHeart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsHeart $questionsHeart)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsHeart->update($request->all());

        return redirect()->route('questionsHeart.index')
                        ->with('success','questionsHeart updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsHeart $questionsHeart)
    {
        $questionsHeart->delete();

        return redirect()->route('questionsHeart.index')
                        ->with('success','questionsHeart deleted successfully');
    }
}
