@extends('layouts.entete')
@section('continue')
    <div class="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form id="RegisterValidation" action="{{ route('employer.store') }}" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <h4 class="card-title">Enregister un employer</h4>
                            </div>
                            <div class="card-body ">
                                <div class="form-group">
                                    <label for=" matricule" class="bmd-label-floating"> matricule *</label>
                                    <input type="text" class="form-control" id="matricule" required="true"
                                        name="matriculeemployer">

                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="nom" class="bmd-label-floating"> Nom *</label>
                                    <input type="text" class="form-control" id="nom"
                                        required="true"name="nomemployer">

                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="prenom" class="bmd-label-floating"> Prenom *</label>
                                    <input type="text" class="form-control" id="Prenom" required="true"
                                        name="prenomemployer">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="adresse" class="bmd-label-floating"> Adresse *</label>
                                    <input type="text" class="form-control" id="adresse" required="true"
                                        name="adresseemployer">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="telephone" class="bmd-label-floating"> Telephone *</label>
                                    <input type="text" class="form-control" id="telephone" required="true"
                                        name="telephoneemployer">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating"> Email *</label>
                                    <input type="text" class="form-control" id="email" required="true"
                                        name="emailemployer">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Validate Inputs</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
