<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerControleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employes = Employer::all();
         $nombreDeEmployer = Employer::count();
        return view('employer.ajout');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $employes = Employer::all();
        $no = 1;

        //$nombreDeEmployer = Employer::count();
        return view('employer.lister', compact("employes", "no"));
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
        $employes = new Employer;
        $employes->prenomemployer = $request->prenomemployer;
        $employes->nomemployer = $request->nomemployer;
        $employes->telephoneemployer = $request->telephoneemployer;
        $employes->adresseemployer = $request->adresseemployer;
        $employes->emailemployer = $request->emailemployer;
        $employes->matriculeemployer = $request->matriculeemployer;
        $employes->save();


        return redirect()->route('employer.store')->with('success', 'employe ajouté avec succès');
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
        $employes = Employer::find($id);
        $no = 1;
    

        //$nombreDeEmployer = Employer::count();
        return view('employer.edit', compact("employes"));
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


        $rules = [
            'prenomemployer' => 'required|string|max:25',
            'emailemployer' => 'required|email|max:255',
            'telephoneemployer' => 'required|digits:9',  // Validation pour le numéro de téléphone
        ];

        // Messages de validation personnalisés
        $messages = [
            'prenomemployer.required' => 'Le nom est obligatoire.',
            'prenomemployer.string' => 'Le nom doit être une chaîne de caractères.',
            'prenomemployer.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'emailemployer.required' => 'L\'adresse email est obligatoire.',
            'emailemployer.email' => 'L\'adresse email doit être valide.',
            'emailemployer.max' => 'L\'adresse email ne peut pas dépasser 5 caractères.',
            'emailemployer.unique' => 'Cette adresse email est déjà utilisée.',
            'telephoneemployer.required' => 'Le numéro de téléphone est obligatoire.',
            'telephoneemployer.digits' => 'Le numéro de téléphone doit comporter exactement 9 chiffres.',
        ];

        // Validation des données de la requête
        $request->validate($rules, $messages);


        $employes = employer::find($id);
        $employes->prenomemployer = $request->prenomemployer;
        $employes->nomemployer = $request->nomemployer;
        $employes->telephoneemployer = $request->telephoneemployer;
        $employes->adresseemployer = $request->adresseemployer;
        $employes->emailemployer = $request->emailemployer;
        $employes->matriculeemployer = $request->matriculeemployer;
        $employes->update();

        return redirect()->route('employer.lister')->with('success', 'employer mis à jour avec succès.');
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
            $employes=Employer::find($id);
            $employes->delete();

            return redirect()->route('employer.lister')->with('message', 'employes supprimer');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
