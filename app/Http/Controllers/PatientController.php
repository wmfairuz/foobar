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

        $product = Patient::all();
        return view('patients.index')->with(['patients' => $patients]);
    }

    public function create(Request $request)
    {
        # code...
        return view('patients.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
 
        $patients = new Patient;
 
        $patients->name = $request->name;
        $patients->age = $request->age;
        $patients->ward = $request->ward;
        $patients->weight = $request->weight;
        $patients->disease = $request->disease;
 
        $patients->save();
 
        return redirect('/patients');

    }

 
    public function destroy(Request $request, Patient $patients)
    {
       $product->delete();
       return redirect()->route('patients.index');
    }

    public function edit(Request $request, Bakery $product)
    {
       return view('patients.edit')->with(['patients' => $patients]);
    }

    public function update(Request $request,Patient $patients): RedirectResponse
    {

        $patients->name = $request->name;
        $patients->age = $request->age;
        $patients->ward = $request->ward;
        $patients->weight = $request->weight;
        $patients->disease = $request->disease;
 
        $patients->save();
 
        return redirect()->route('patients.index');

    }

    public function show(Request $request,Patient $patients)
    {
        # code...
    
        return view('patients.show')->with(['patient' => $patients]);
    }

}