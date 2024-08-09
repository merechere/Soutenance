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
                                <h4 class="card-title ">Lister des formation</h4>
                            </div>
                            <div class="card-body table-full-width table-hover">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="">
                                            <th>
                                                N°
                                            </th>
                                            <th>
                                                Titre
                                            </th>
                                            <th>
                                                Description
                                            </th>
                                            
                                          
                                            <th>
                                                Action
                                            </th>
                                        </thead>
                                        <tbody>

                                            @foreach ($formations as $formation)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $formation->titre }}</td>
                                                    <td>{{ $formation->description}}</td>
                                                    <td>
                                                        <a href="{{route('formation.edit',$formation->id)}}"
                                                            class="btn btn-primary">Modifier</a>
                                                        <a href="{{url('formation.delete',$formation->id)}}"
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
