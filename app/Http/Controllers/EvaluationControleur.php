<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationControleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $evaluation = Evaluation::all();
        $nombreDeEvaluation = Evaluation::count();
       return view('evaluations.ajout');
   
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $evaluations = Evaluation::all();
        $no = 1;

        //$nombreDeEmployer = Employer::count();
        return view('evaluations.lister', compact("evaluations", "no"));
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
        $evaluation= new Evaluation();
        $evaluation->note = $request->note ;
        $evaluation->commentaire = $request->commentaire;
        $evaluation->save();

        return redirect()->route('evaluations.store')->with('success', 'evaluations ajouté avec succès');
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
       
        $evaluation = Evaluation::find($id);
        $no = 1;
    
        return view('evaluations.edit', compact("evaluations"));
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
       

        // Validation des données de la requête
        $request->validate();


        $evaluation =evaluation::find($id);
        $evaluation->note = $request->note;
        $evaluation->commentaire = $request->commentaire;
        $evaluation->update();

        return redirect()->route('evaluations.lister')->with('success', 'evaluations mis à jour avec succès.');
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
            $evaluation=Evaluation::find($id);
            $evaluation->delete();

            return redirect()->route('evaluations.lister')->with('message', 'evaluation supprimer');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
