@extends('layouts.entete')
@section('continue')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form id="RegisterValidation" action="{{ route('evaluations.update', $evaluations->id) }}" method="POST">
                        @csrf
                        @method('PUT')


                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <h4 class="card-title">Modifier une evaluations</h4>
                            </div>

                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="note" class="bmd-label-floating"> Note *</label>
                                    <input type="text" class="form-control" id="nom"
                                        required="true"name="note" value="{{ $evaluations->note }}">

                                </div>

                                <div class="form-group">
                                    <label for="commentaire" class="bmd-label-floating"> Commentaire *</label>
                                    <input type="text" class="form-control" id="Commentaire" required="true"
                                        name="commentaire" value="{{ $evaluations->commentaire}}">
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
