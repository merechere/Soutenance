<?php

namespace App\Http\Controllers;

use App\Models\Sessions;
use Illuminate\Http\Request;

class SessionsControleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Sessions::all();
        $nombreDesessions =Sessions::count();
       return view('sessions.ajout');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $sessions = Sessions::all();
        $no = 1;

       
        return view('sessions.lister', compact("sessions", "no"));
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
        
        $sessions = new Sessions();
        $sessions->titre = $request->titre;
        $sessions->heuredebut= $request->heuredebut;
        $sessions->heurefin= $request->heurefin;
        $sessions->save();


        return redirect()->route('sessions.store')->with('success', 'sessions ajouté avec succès');
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
        $sessions = Sessions::find($id);
        $no = 1;
    
        return view('sessions.edit', compact("sessions"));
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
            'heuredebut' => 'required|date_format:H:i',
            'heurefin' => 'required|date_format:H:i',
        ]);
    
        // Récupération de la session
        $session = Sessions::find($id);
    
        if (!$session) {
            return redirect()->route('sessions.lister')->with('error', 'Session non trouvée.');
        }
    
        // Mise à jour des attributs de la session
        $session->titre = $request->titre;
        $session->heuredebut = $request->heuredebut;
        $session->heurefin = $request->heurefin;
        $session->save();
    
        // Redirection avec message de succès
        return redirect()->route('sessions.lister')->with('success', 'Session mise à jour avec succès.');
    
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
            $sessions=Sessions::find($id);
            $sessions->delete();

            return redirect()->route('sessions.lister')->with('message', 'sessions supprimer');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
