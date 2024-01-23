<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        // عرض نموذج تشخيص
        return view('diagnosis.index');
    }

    public function processDiagnosis(Request $request)
    {
        // قم بتنفيذ خوارزمية التشخيص هنا باستخدام البيانات المدخلة
        // ...

        // عند الانتهاء، يمكنك توجيه المستخدم إلى صفحة النتائج
        return redirect()->route('results');
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
