@extends('layouts.entete')
@section('continue')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-rose">
                                <div class="card-icon">
                                    <i class="material-icons">list</i>
                                </div>
                                <h4 class="card-title ">Liste des evaluations </h4>
                            </div>
                            <div class="card-body table-full-width table-hover">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="">
                                            <th>
                                                N°
                                            </th>
                                            <th>
                                                Note
                                            </th>
                                            <th>
                                               Commentaire 
                                            </th>
                                            <th>
                                                Action
                                            </th>

                                        
                                        </thead>
                                        <tbody>

                                            @foreach ($evaluations as $evaluations)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $evaluations->Note }}</td>
                                                    <td>{{ $evaluations->Commentaire}}</td>
                                                    
                                                    
                                                    
                                                    
                                                    <td>
                                                        <a href=""
                                                            class="btn btn-primary">Modifier</a>
                                                        <a href="{{url('$evaluations.delete',$evaluations->id)}}"
                                                            class="btn btn-danger">Supprimer</a>


                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
