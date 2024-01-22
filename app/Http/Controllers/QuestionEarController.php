<?php

namespace App\Http\Controllers;

use App\Models\QuestionsEar;
use Illuminate\Http\Request;

class QuestionEarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $questionsEar = QuestionsEar::all();
        return view('questions.ear.index', compact('questionsEar'));
    }
    public function submitEar(Request $request)
    {
          $description = "";
          // قم بتلقي البيانات من النموذج
            $answers = $request->all();
            // استرجاع الأسئلة من قاعدة البيانات
            $questionsEar = QuestionsEar::all();

            // تفاصيل الأسئلة
            foreach ($questionsEar as $question) {
                $answer = $answers['answer_' . $question->id] ?? 'لم يتم الإجابة';

                if($question->id == 1 && $answer == 'No' ){   $description1=  " انت لا تعاني من ألم في الأذن" . "<br><br>"; }
                else  if($question->id == 1 && $answer == 'Yes' ){$description1= "أنت تعاني من ألم في الأذن". "<br><br>";}

                if($question->id == 2 && $answer == 'No' ){  $description2= "رائع انه ليس هناك تورم أو احمرار في الأذن". "<br><br>"; }
                else if($question->id == 2 && $answer == 'Yes' ) {$description2= "بما أن هناك تورم أو احمرار في الأذن عليك أخذ دواء اسمه". "<br><br>";}

                if($question->id == 3 && $answer == 'No' ){  $description3= "لا تعاني من فقدان في السمع هذا رائع". "<br><br>"; }
                else  if($question->id == 3 && $answer == 'Yes' ){$description3= "بما أنه تعاني من فقدان في السمع عليك اخذ الدواء ". "<br><br>";}

                if($question->id == 4 && $answer == 'No' ){   $description4= "لا توجد إفرازات من الأذن". "<br><br>"; }
                else  if($question->id == 4 && $answer == 'Yes' ){$description4= "توجد إفرازات من الأذن". "<br><br>";}

                if($question->id == 5 && $answer == 'No' ){  $description5= "لا تعاني من دوخة أو اضطرابات في التوازن". "<br><br>"; }
                else  if($question->id == 5 && $answer == 'Yes' ){$description5=  "تعاني من دوخة أو اضطرابات في التوازن".  "<br><br>";}

                if($question->id == 6 && $answer == 'No' ){    $description6= "لا تشعر بالصداع أو الضغط في الرأس". "<br><br>"; }
                else  if($question->id == 6 && $answer == 'Yes' ){$description6= "تشعر بالصداع أو الضغط في الرأس".  "<br><br>";}

            }


            $description = $description1.$description2.$description3.$description4.$description5.$description6;
            echo $description;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
