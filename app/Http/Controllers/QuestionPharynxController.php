<?php

namespace App\Http\Controllers;
use App\Models\QuestionsPharynx;
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
            echo $description;
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
