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
                    <form id="RegisterValidation" action="{{ route('sessions.store') }}" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <h4 class="card-title">Enregister une session</h4>
                            </div>
                            <div class="card-body ">
                               
                                <div class="form-group">
                                    <label for="titre" class="bmd-label-floating"> Titre *</label>
                                    <input type="text" class="form-control" id="titre" required="true"
                                        name="titre">
                                </div>
                              
                                <div class="form-group">
                                    <label for="heuredebut" class="bmd-label-floating"> Heuredebut *</label>
                                    <input type="time" class="form-control" id="heuredebut" required="true"
                                        name="heuredebut">
                                </div>
                                <div class="form-group">
                                    <label for="heurefin" class="bmd-label-floating"> Heurefin *</label>
                                    <input type="time" class="form-control" id="heurefin" required="true" name="heurefin">
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Validate</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
