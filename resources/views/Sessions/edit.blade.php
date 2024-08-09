@extends('layouts.entete')
@section('continue')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form id="RegisterValidation" action="{{ route('sessions.update', $sessions->id) }}" method="POST">
                        @csrf
                        @method('PUT')


                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <h4 class="card-title">Modifier une sessions</h4>
                            </div>

                            <div class="card-body">
                              
                                <div class="form-group">
                                    <label for="titre" class="bmd-label-floating">Titre*</label>
                                    <input type="text" class="form-control" id="nom"
                                        required="true"name="titre" value="{{ $sessions->titre}}">

                                </div>

                                <div class="form-group">
                                    <label for="Heuredebut" class="bmd-label-floating"> Heuredebut*</label>
                                    <input type="time" class="form-control" id="Heuredebut" required="true"
                                        name="Heuredebut" value="{{ $sessions->heuredebut }}">
                                </div>
                                <div class="form-group">
                                    <label for="heurefin " class="bmd-label-floating"> Heurefin  *</label>
                                    <input type="time" class="form-control" id="heurefin " required="true"
                                        name="heurefin " value="{{ $sessions->heurefin }}">
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
