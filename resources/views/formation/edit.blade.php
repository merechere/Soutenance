@extends('layouts.entete')
@section('continue')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form id="RegisterValidation" action="{{ route('formation.update', $formation->id) }}" method="POST">
                        @csrf
                        @method('PUT')


                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <h4 class="card-title">Modifier une formation </h4>
                            </div>

                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="titre" class="bmd-label-floating"> Titre *</label>
                                    <input type="text" class="form-control" id="titre" required="true"
                                        name="titre" value="{{ $formation->titre }}">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="bmd-label-floating"> Description *</label>
                                    <input type="titre" class="form-control" id="titre" required="true"
                                        name="titre" value="{{ $formation->description}}">
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
