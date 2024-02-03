<?php

namespace App\Http\Controllers;
use App\Models\QuestionsKidney;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class QuestionKidneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsKidney = QuestionsKidney::all();
        return view('questions.kidney.index', compact('questionsKidney'));

    }
    public function submitKidney(Request $request)
    {
          $description = "";
          $description1 = "";
          $description2 = "";
          $description3 = "";
          $description4 = "";
          $description5 = "";
          $description6 = "";
          $description7 = "";

          $questionsLungcount=QuestionsKidney::all()->count();
          $answers = $request->all();

          $yesAnswersCount = 0;
          $noAnswersCount = 0;
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsKidney = QuestionsKidney::all();




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
                                                           $diagnosisdb = Diagnosis::find(54);
                                        }
                                             $diagnosisdb = Diagnosis::find(50);
                                    }
                                         $diagnosisdb = Diagnosis::find(50);
                                }
                                     $diagnosisdb = Diagnosis::find(48);
                            }
                                 $diagnosisdb = Diagnosis::find(49);
                        }
                             $diagnosisdb = Diagnosis::find(51);
                    }
                         $diagnosisdb = Diagnosis::find(52);
                }
                     $diagnosisdb = Diagnosis::find(52);
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
        $questionsKidneis = QuestionsKidney::latest()->paginate(5);

        return view('doctor.crudquestions.kidney.index',compact('questionsKidneis'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.kidney.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsKidney::create($request->all());

        return redirect()->route('questionsKidney.index')
                        ->with('success','questionsKidney created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsKidney $questionsKidney)
    {
        return view('doctor.crudquestions.kidney.show',compact('questionsKidney'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsKidney $questionsKidney)
    {
        return view('doctor.crudquestions.kidney.edit',compact('questionsKidney'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsKidney $questionsKidney)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsKidney->update($request->all());

        return redirect()->route('questionsKidney.index')
                        ->with('success','questionsKidney updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsKidney $questionsKidney)
    {
        $questionsKidney->delete();

        return redirect()->route('questionsKidney.index')
                        ->with('success','questionsKidney deleted successfully');
    }
}
