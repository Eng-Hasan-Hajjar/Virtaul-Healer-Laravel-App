<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;
use App\Http\Controllers\Auth;

class PatientController extends Controller
{
       /**
     * Show the form for entering patient data.
     */
    public function input()
    {
        // يمكنك إضافة كود لإعداد واجهة إدخال بيانات المريض هنا
        return view('patients.input');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   // الحصول على المستخدم المسجل حاليا
   $user = auth()->user();

   // التحقق من وجود المستخدم
   if ($user) {
       // الحصول على معلومات المريض للمستخدم الحالي
       $patient = $user->patient;

       // عرض معلومات المريض
       return view('patients.show', compact('patient'));
   }


/*
        $patients = Patient::latest()->paginate(5);

        return view('patients.index',compact('patients'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);

*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       //dd($request);
            // التحقق من صحة البيانات
            $request->validate([
                'age' => 'nullable|integer',
                'gender' => 'required|in:male,female',
                'blood_type' => 'required|string',
                'genetic_disease' => 'nullable|string',
                'chronic_diseases' => 'nullable|string',
                'previous_surgery' => 'nullable|string',
                'number' => 'required|string|unique:patients,number',
                'address' => 'nullable|string',
            ]);

    // الحصول على المستخدم المسجل
    $user = auth()->user();

    // إنشاء المريض
    $patient = new Patient($request->all());

    // حفظ المريض وربطه بالمستخدم المسجل
    $user->patient()->save($patient);
          //  Patient::create($request->all());
            // إنشاء المريض
            /*
            $id = auth()->id();
            $patient = new Patient([
                'age' => $request->input('age'),
                'gender' => $request->input('gender'),
                'blood_type' => $request->input('blood_type'),
                'genetic_disease' => $request->input('genetic_disease'),
                'chronic_diseases' => $request->input('chronic_diseases'),
                'previous_surgery' => $request->input('previous_surgery'),
                'number' => $request->input('number'),
                'address' => $request->input('address'),
                'user_id'=>$request->input($id),
            ]);
*/
            /*
            $user = User::find($id);
            $patient = $user->patient;
            // ربط المريض بالمستخدم المسجل
            $user->patient()->associate($patient);
            $user->save();
*/
            return redirect()->route('patients.index')
            ->with('success','patient created successfully.');
            // توجيه المستخدم إلى الصفحة الرئيسية أو أي صفحة تريدها بعد إدخال بيانات المريض
          //  return redirect()->route('home')->with('success', 'تم إدخال بيانات المريض بنجاح');

    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
       // dd($patient);
        return view('patients.edit',compact('patient'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'age' => 'nullable|integer',
            'gender' => 'nullable|string',
            'blood_type' => 'nullable|string',
            'genetic_disease' => 'nullable|string',
            'chronic_diseases' => 'nullable|string',
            'previous_surgery' => 'nullable|string',
            'number' => 'nullable|integer|unique:patients,number,'.$patient->id,
            'address' => 'nullable|string',
        ]);
        $patient->update($request->all());
        return redirect()->route('patients.index')->with('success', 'تم تحديث معلومات المريض بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
