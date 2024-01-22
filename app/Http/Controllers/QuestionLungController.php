<?php

namespace App\Http\Controllers;
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
