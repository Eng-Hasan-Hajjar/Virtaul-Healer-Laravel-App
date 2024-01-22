<?php

namespace App\Http\Controllers;

use App\Models\QuestionsStomach;
use Illuminate\Http\Request;

class QuestionStomachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsStomach = QuestionsStomach::all();
        return view('questions.stomach.index', compact('questionsStomach'));

    }
    public function submitStomach(Request $request)
    {
          $description = "";
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsStomach = QuestionsStomach::all();

            // تفاصيل الأسئلة
            foreach ($questionsStomach as $question) {
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
        $questionsStomachs = QuestionsStomach::latest()->paginate(5);

        return view('doctor.crudquestions.stomach.index',compact('questionsStomachs'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.stomach.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsStomach::create($request->all());

        return redirect()->route('questionsStomach.index')
                        ->with('success','questionsStomach created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsStomach $questionsStomach)
    {
        return view('doctor.crudquestions.stomach.show',compact('questionsStomach'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsStomach $questionsStomach)
    {
        return view('doctor.crudquestions.stomach.edit',compact('questionsStomach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsStomach $questionsStomach)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsStomach->update($request->all());

        return redirect()->route('questionsStomach.index')
                        ->with('success','questionsStomach updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsStomach $questionsStomach)
    {
        $questionsStomach->delete();

        return redirect()->route('questionsStomach.index')
                        ->with('success','questionsStomach deleted successfully');
    }
}
