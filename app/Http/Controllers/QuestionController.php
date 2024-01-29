<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\QuestionsLung;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index2()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }
    public function showQuestions(Request $request)
    {
        $questionIds = [1, 2, 3]; // قم بتحديد الـ IDs التي ترغب في عرضها
        $questions = Question::whereIn('id', $questionIds)->get();

        return view('questions.show', compact('questions'));
    }

    public function submit(Request $request)
    {

    }
}
