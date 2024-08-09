<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;

class FormateurControleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $formateur = Formateur::all();
        $nombreDeformateur = Formateur::count();
       return view('formateur.ajout');
   
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $formateurs = Formateur::all();
        $no = 1;

        //$nombreDeEmployer = Employer::count();
        return view('formateur.lister', compact("formateurs", "no"));
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
        $formateur = new Formateur();
        $formateur->prenomFormateur = $request->prenomFormateur;
        $formateur->nomFormateur = $request->nomFormateur;
        $formateur->telephoneFormateur = $request->telephoneFormateur;
        $formateur->adresseFormateur = $request->adresseFormateur;
        $formateur->emailFormateur = $request->emailFormateur;
        $formateur->matriculeFormateur = $request->matriculeFormateur;
        $formateur->save();


        return redirect()->route('formateur.store')->with('success', 'formateur ajouté avec succès');
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
        $formateur = Formateur::find($id);
        $no = 1;
    
        return view('formateur.edit', compact("formateur"));
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
            'prenomformateur' => 'required|string|max:25',
            'emailformateur' => 'required|email|max:255',
            'telephoneformateur' => 'required|digits:9',  // Validation pour le numéro de téléphone
        ];

        // Messages de validation personnalisés
        $messages = [
            'prenomformateur.required' => 'Le nom est obligatoire.',
            'prenomformateur.string' => 'Le nom doit être une chaîne de caractères.',
            'prenomformateur.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'emailformateur.required' => 'L\'adresse email est obligatoire.',
            'emailformateur.email' => 'L\'adresse email doit être valide.',
            'emailformateur.max' => 'L\'adresse email ne peut pas dépasser 5 caractères.',
            'emailformateur.unique' => 'Cette adresse email est déjà utilisée.',
            'telephoneformateur.required' => 'Le numéro de téléphone est obligatoire.',
            'telephoneformateur.digits' => 'Le numéro de téléphone doit comporter exactement 9 chiffres.',
        ];

        // Validation des données de la requête
        $request->validate($rules, $messages);


        $formateurs = formateur::find($id);
        $formateurs->matriculeformateur = $request->matriculeFormateur;
        $formateurs->nomformateur = $request->nomformateur;
        $formateurs->telephoneformateur = $request->telephoneformateur;
        $formateurs->adresseformateur = $request->adresseformateur;
        $formateurs->emailformateur = $request->emailformateur;
        $formateurs->prenomformateur = $request->prenomformateur;
        $formateurs->update();

        return redirect()->route('formateur.lister')->with('success', 'employer mis à jour avec succès.');
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
            $formateurs=Formateur::find($id);
            $formateurs->delete();

            return redirect()->route('formateur.lister')->with('message', 'formateur supprimer');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
