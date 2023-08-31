<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use Illuminate\Routing\Controller;

use App\Models\Agence;


class AgenceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $agences = Agence::all();
        return view('agences.index', compact('agences'));
    }

    public function create()
    {
        return view('agences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'ville'=>'required',
            'adresse'=>'required',
        ]);

        Agence::create($request->all());

        return redirect()->route('agences.index')
         ->with('succes','Agence créée avec succès.');
    }

    public function show(Agence $agence)
    {
        return view('agences.show',compact('agence'));
    }
    public function edit(Agence $agence)
    {
        return view('agences.edit',compact('agence'));
    }

    public function update(Request $request, Agence $agence)
    {
        $request->validate([
            'nom'=>'required',
            'ville'=>'required',
            'adresse'=>'required',
        ]);
        $agence->update($request->all());

        return redirect()->route('agences.index')
            ->with('success', 'Agence mise à jour avec succès.');
    }

    public function destroy(Agence $agence)
    {
        $agence->delete();
        return redirect()->route('agences.index') 
             ->with('success', 'Agence supprimée avec succès.');
    }

}
