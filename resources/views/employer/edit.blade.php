@extends('layouts.entete')
@section('continue')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form id="RegisterValidation" action="{{ route('employer.update', $employes->id) }}" method="POST">
                        @csrf
                        @method('PUT')


                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <h4 class="card-title">Modifier un employer</h4>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for=" matricule" class="bmd-label-floating"> matricule *</label>
                                    <input type="text" class="form-control" id="matricule" required="true"
                                        name="matriculeemployer" value="{{ $employes->matriculeEmployer }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating"> Nom *</label>
                                    <input type="text" class="form-control" id="nom"
                                        required="true"name="nomemployer" value="{{ $employes->nomEmployer }}">

                                </div>

                                <div class="form-group">
                                    <label for="prenom" class="bmd-label-floating"> Prenom *</label>
                                    <input type="text" class="form-control" id="Prenom" required="true"
                                        name="prenomemployer" value="{{ $employes->prenomEmployer }}">
                                </div>
                                <div class="form-group">
                                    <label for="adresse" class="bmd-label-floating"> Adresse *</label>
                                    <input type="text" class="form-control" id="adresse" required="true"
                                        name="adresseemployer" value="{{ $employes->adresseEmployer }}">
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class="bmd-label-floating"> Telephone *</label>
                                    <input type="text" class="form-control" id="telephone" required="true"
                                        name="telephoneemployer" value="{{ $employes->telephoneEmployer }}">
                                </div>
                                <div class="form-group">
                                    <label for="emailemployer" class="bmd-label-floating"> Email *</label>
                                    <input type="text" class="form-control" id="email" required="true"
                                        name="emailemployer" value="{{ $employes->emailEmployer }}">
                                    @error('emailemployer')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Modifier</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
