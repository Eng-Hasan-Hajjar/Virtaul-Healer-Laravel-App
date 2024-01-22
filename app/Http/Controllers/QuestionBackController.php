<?php

namespace App\Http\Controllers;

use App\Models\QuestionsBack;
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
            echo $description;
    }

  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questionsBacks = QuestionsBack::latest()->paginate(5);

        return view('doctor.crudquestions.back.index',compact('questionsBacks'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
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
            'name' => 'required',

        ]);

        QuestionsBack::create($request->all());

        return redirect()->route('departements.index')
                        ->with('success','Departement created successfully.');
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
    public function update(Request $request, QuestionsBack $departement)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $departement->update($request->all());

        return redirect()->route('departements.index')
                        ->with('success','Departement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsBack $departement)
    {
        $departement->delete();

        return redirect()->route('departements.index')
                        ->with('success','Departement deleted successfully');
    }
}
