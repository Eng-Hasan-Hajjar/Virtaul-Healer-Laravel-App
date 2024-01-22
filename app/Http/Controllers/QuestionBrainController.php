<?php

namespace App\Http\Controllers;
use App\Models\QuestionsBrain;
use Illuminate\Http\Request;

class QuestionBrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsBrain = QuestionsBrain::all();
        return view('questions.brain.index', compact('questionsBrain'));

    }
    public function submitBrain(Request $request)
    {
          $description = "";
          $description1 = "";
          $description2 = "";
          $description3 = "";
          $description4 = "";
          $description5 = "";
          $description6 = "";
          $description7 = "";
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsBrain = QuestionsBrain::all();

            // تفاصيل الأسئلة
            foreach ($questionsBrain as $question) {
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
        $questionsBrains = QuestionsBrain::latest()->paginate(5);

        return view('doctor.crudquestions.brain.index',compact('questionsBrains'))
                    ->with('i', (request()->input('page', 1) - 1) * 2);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.crudquestions.brain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',

        ]);

        QuestionsBrain::create($request->all());

        return redirect()->route('questionsBrain.index')
                        ->with('success','questionsBrains created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionsBrain $questionsBrain)
    {
        return view('doctor.crudquestions.brain.show',compact('questionsBrain'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionsBrain $questionsBrain)
    {
        return view('doctor.crudquestions.brain.edit',compact('questionsBrain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionsBrain $questionsBrain)
    {
        $request->validate([
            'question' => 'required',

        ]);

        $questionsBrain->update($request->all());

        return redirect()->route('questionsBrain.index')
                        ->with('success','questionsBrain updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionsBrain $questionsBrain)
    {
        $questionsBrain->delete();

        return redirect()->route('questionsBrain.index')
                        ->with('success','questionsBrain deleted successfully');
    }
}
