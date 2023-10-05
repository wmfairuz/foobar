<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PatientController extends Controller
{ 
    public function index(Request $request)
    {
        # code...

        $patient = Patient::all();
        return view('patients.index')->with(['patients' => $patient]);
    }

    public function create(Request $request)
    {
        # code...
        return view('patients.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
 
        $patient = new Patient;
 
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->ward = $request->ward;
        $patient->weight = $request->weight;
        $patient->disease = $request->disease;
 
        $patient->save();
 
        return redirect('/patients');

    }

 
    public function destroy(Request $request, Patient $patient)
    {
       $patient->delete();
       return redirect()->route('patients.index');
    }

    public function edit(Request $request, Bakery $product)
    {
       return view('patients.edit')->with(['patients' => $patient]);
    }

    public function update(Request $request,Patient $patient): RedirectResponse
    {

        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->ward = $request->ward;
        $patient->weight = $request->weight;
        $patient->disease = $request->disease;
 
        $patient->save();
 
        return redirect()->route('patients.index');

    }

    public function show(Request $request,Patient $patient)
    {
        # code...
    
        return view('patients.show')->with(['patient' => $patient]);
    }

}