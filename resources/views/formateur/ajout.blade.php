@extends('layouts.entete')
@section('continue')
    <div class="content">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form id="Ajout Formateur" action="{{route("formateur.store")}}" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <h4 class="card-title">Enregister un formteur</h4>
                            </div>
                            <div class="card-body ">
                                <div class="form-group">
                                    <label for="matricule" class="bmd-label-floating"> Matricule *</label>
                                    <input type="text" class="form-control" id="matricule" required="true"name="matriculeFormateur">
                                    
                                </div>
                            <div class="card-body ">
                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating"> nom *</label>
                                    <input type="text" class="form-control" id="nom" required="true"name="nomFormateur">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="prenom" class="bmd-label-floating"> Prenom *</label>
                                    <input type="text" class="form-control" id="Prenom" required="true"
                                        name="prenomFormateur">
                                </div>
                                <div class="form-group">
                                    <label for="adresse" class="bmd-label-floating"> Adresse *</label>
                                    <input type="text" class="form-control" id="adresse" required="true"
                                        name="adresseFormateur">
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class="bmd-label-floating"> Telephone *</label>
                                    <input type="text" class="form-control" id="telephone" required="true"
                                        name="telephoneFormateur">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating"> Email *</label>
                                    <input type="text" class="form-control" id="email" required="true"
                                        name="emailFormateur">
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Ajout</button>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
@endsection
