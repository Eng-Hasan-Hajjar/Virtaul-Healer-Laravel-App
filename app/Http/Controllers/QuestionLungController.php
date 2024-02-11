<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\QuestionsLung;
use Illuminate\Http\Request;

class QuestionLungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsLung = QuestionsLung::all();
        return view('questions.Lung.index', compact('questionsLung'));
    }
    public function submitLung(Request $request)
    {
            $description = "";
            $description1 = "";
            $description2 = "";
            $description3 = "";
            $description4 = "";
            $description5 = "";
            $description6 = "";
            $questionsLung = QuestionsLung::all();
            $questionsLungcount=QuestionsLung::all()->count();
            $answers = $request->all();

            $yesAnswersCount = 0;
            $noAnswersCount = 0;
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
                    if ($yesAnswersCount >= 6) {
                        $diagnosis = "انك تعاني من حالة شديدة. من الضروري الاتصال بالطبيب الخاص بك فوراً.";
                    } else {
                        $diagnosis = "   لديك مشكلة في الجهاز التنفسي. يُفضل استشارةالطبيب الخاص بك.";
                    }
                }else{
                    $diagnosis = "   لديك مشكلة في الجهاز التنفسي. يُفضل استشارةالطبيب الخاص بك.";
                }
            } else {
                $diagnosis = "لا يبدو أن هناك حالة خطيرة. يمكنك متابعة وضعك، ولكن إذا كانت هناك أية مشاكل، يجب عليك استشارة الطبيب.";
            }

            $yesAnswersCountpercent= $yesAnswersCount * 100 / $questionsLungcount ;

            $diagnosisdb = "حالتك شبه سليمة انت بحاجة الى نقاهة";

            if ($yesAnswersCountpercent >= 20) {
                if ($yesAnswersCountpercent >= 30) {
                    if ($yesAnswersCountpercent >= 40) {
                        if ($yesAnswersCountpercent >= 50) {
                            if ($yesAnswersCountpercent >= 60) {
                                if ($yesAnswersCountpercent >= 70) {
                                    if ($yesAnswersCountpercent >= 80) {
                                        if ($yesAnswersCountpercent >= 90) {
                                                           $diagnosisdb = Diagnosis::find(7);
                                        }
                                        else       $diagnosisdb = Diagnosis::find(6);
                                    }
                                    else      $diagnosisdb = Diagnosis::find(5);
                                }
                                else     $diagnosisdb = Diagnosis::find(4);
                            }
                            else      $diagnosisdb = Diagnosis::find(4);
                        }
                        else    $diagnosisdb = Diagnosis::find(3);
                    }
                    else     $diagnosisdb = Diagnosis::find(2);
                }
                else
                     $diagnosisdb = Diagnosis::find(1);
            }

            if ($yesAnswersCountpercent >= 20) {
            $id = $diagnosisdb->id;

            $descriptiondb = $diagnosisdb->description;
            return view('outdescription', compact('description','diagnosis','descriptiondb','yesAnswersCount','yesAnswersCountpercent'));

        }
        else {
            $descriptiondb=" حالتك شبه سليمة انت بحاجة الى نقاهة"."ننصحك بتناول المشروبات الساخنة والراحة ";
            return view('outdescription', compact('description','diagnosis','descriptiondb','yesAnswersCount','yesAnswersCountpercent'));

        }

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questionsLungs = QuestionsLung::latest()->paginate(5);

        return view('doctor.crudquestions.lung.index',compact('questionsLungs'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.lung.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsLung::create($request->all());

        return redirect()->route('questionsLung.index')
                        ->with('success','questionsLung created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsLung $questionsLung)
    {
        return view('doctor.crudquestions.lung.show',compact('questionsLung'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsLung $questionsLung)
    {
        return view('doctor.crudquestions.lung.edit',compact('questionsLung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsLung $questionsLung)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsLung->update($request->all());

        return redirect()->route('questionsLung.index')
                        ->with('success','questionsLung updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsLung $questionsLung)
    {
        $questionsLung->delete();

        return redirect()->route('questionsLung.index')
                        ->with('success','questionsLung deleted successfully');
    }
}
