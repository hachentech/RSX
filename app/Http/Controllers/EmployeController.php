<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{

    public function index()
    {
        $employes = Employe::all();
        return view('employe.index', compact('employes'));
    }
    
    public function create()
    {
        return view('employe.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:employes',
            'tel' => 'required',
            'fonction' => 'required',
        ]);
    
        Employe::create($request->all());
    
        return redirect()->route('employes.index');
    }
    
    public function show(Employe $employe)
    {
        return view('employes.show', compact('employe'));
    }
    
    public function edit(Employe $employe)
    {
        return view('employe.edit', compact('employe'));
    }
    
    public function update(Request $request, Employe $employe)
    {
        $request->validate([

            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:employes,email,' . $employe->id,
            'tel' => 'required|string|max:15',
            'fonction' => 'required|string|max:255',
        ]);
    
        $employe->update($request->all());
    
        return redirect()->route('employes.index');
    }
    
    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employes.index');
    }
    

}
