<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationControleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formation = Formation::all();
        $nombreDeformation = Formation::count();
       return view('formation.ajout');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $formations = Formation::all();
        $no = 1;

        //$nombreDeEmployer = Employer::count();
        return view('formation.lister', compact("formations", "no"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formation = new Formation;
        $formation->titre = $request->titre;
        $formation->description = $request->description;
        $formation->save();


        return redirect()->route('formation.store')->with('success', 'formation ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation = Formation::find($id);
        $no = 1;
    
        return view('formation.edit', compact("formation"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        // Récupération de la formation
        $formation = Formation::find($id);
        
        if (!$formation) {
            return redirect()->route('formation.lister')->with('error', 'Formation non trouvée.');
        }
    
        // Mise à jour des attributs de la formation
        $formation->titre = $request->titre;
        $formation->description = $request->description;
        $formation->save();
    
        // Redirection avec message de succès
        return redirect()->route('formation.lister')->with('success', 'Formation mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $formations=Formation::find($id);
            $formations->delete();

            return redirect()->route('formation.lister')->with('message', 'formation supprimer');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
