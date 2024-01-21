<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::latest()->paginate(5);

        return view('doctor.departements.index',compact('departements'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.departements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Departement::create($request->all());

        return redirect()->route('doctor.departements.index')
                        ->with('success','Departement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        return view('doctor.departements.show',compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        return view('doctor.departements.edit',compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $departement->update($request->all());

        return redirect()->route('doctor.departements.index')
                        ->with('success','Departement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        $departement->delete();

        return redirect()->route('doctor.departements.index')
                        ->with('success','Departement deleted successfully');
    }
}
