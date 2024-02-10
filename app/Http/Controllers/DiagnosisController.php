<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosis;

class DiagnosisController extends Controller
{

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnosises = Diagnosis::latest()->paginate(5);
        return view('diagnosis.index',compact('diagnosises'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diagnosis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);
        Diagnosis::create($request->all());
        return redirect()->route('diagnosis.index')
                        ->with('success','diagnosis created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosis $diagnosi)
    {

        return view('diagnosis.show',compact('diagnosi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosis $diagnosi)
    {

        return view('diagnosis.edit',compact('diagnosi'));
    }

    /**
     * Update the specified resource in storage.
     */
   
    public function update(Request $request, Diagnosis $diagnosi)
    {
        $request->validate([
            'description' => 'required',

        ]);

        $diagnosi->update($request->all());

        return redirect()->route('diagnosis.index')
                        ->with('success','diagnosis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosi)
    {
        $diagnosi->delete();
        return redirect()->route('diagnosis.index')
                        ->with('success','diagnosis deleted successfully');
    }
}
