<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index(Request $request)
    {
         # code...
         $animals = Animal::all();
        return view('animals.index')->with(['animals' => $animals]);
    }

    public function create(Request $request)
    {
        # code...
        return view('animals.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
        $animal = new Animal;
        $animal->name = $request->name;
        $animal->date = $request->date;
        $animal->sex = $request->sex;
        $animal->species = $request->species;
 
        $animal->save();
 
        return redirect('/animals');

    }

    // app/Http/Controllers/ItemController.php

    public function destroy(Request $request,Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index');
    }

    public function edit(Request $request,Animal $animal)
    {
        return view('animals.edit')->with(['animal' => $animal]);
    }

    public function update(Request $request,Animal $animal)
    {
        $animal->name = $request->name;
        $animal->date = $request->date;
        $animal->sex = $request->sex;
        $animal->species = $request->species;
 
        $animal->save();
        return redirect()->route('animals.index');

    }
    public function show(Request $request,Animal $animal)
    {
        
        return view('animals.show')->with(['animal' => $animal]);
    }
}