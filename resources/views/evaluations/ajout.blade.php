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
                    <form id="RegisterValidation" action="{{ route('evaluations.store') }}" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <h4 class="card-title">Enregister une evluations</h4>
                            </div>
                            <div class="card-body ">
                                <div class="form-group">
                                    <label for=" note" class="bmd-label-floating"> Note*</label>
                                    <input type="text" class="form-control" id="note" required="true"
                                        name="note">

                                </div>

                                <div class="form-group">
                                    <label for="commentaire" class="bmd-label-floating">Commentaire*</label>
                                    <input type="text" class="form-control" id="commentaire"
                                        required="true"name="commentaire">

                                </div>
                               
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
