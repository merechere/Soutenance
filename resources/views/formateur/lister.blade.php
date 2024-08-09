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
                                <h4 class="card-title ">Liste des formateur</h4>
                            </div>
                            <div class="card-body table-full-width table-hover">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="">
                                            <th>
                                                N°
                                            </th>
                                            <th>
                                                Nom
                                            </th>
                                            <th>
                                                Prenom
                                            </th>
                                            <th>
                                                Telephone
                                            </th>
                                            <th>
                                                Adresse
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </thead>
                                        <tbody>

                                            @foreach ($formateurs as $formateur)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $formateur->matriculeFormateur}}</td>
                                                    <td>{{ $formateur->nomFormateur}}</td>
                                                    <td>{{ $formateur->prenomFormateur}}</td>
                                                    <td>{{ $formateur->telephoneFormateur}}</td>
                                                    <td>{{ $formateur->adresseFormateur}}</td>
                                                    <td>{{ $formateur->emailFormateur}}</td>
                                                    <td>
                                                        <a href="{{route('formateur.edit',$formateur->id)}}"
                                                            class="btn btn-primary">Modifier</a>
                                                        <a href="{{url('formateur.delete',$formateur->id)}}"
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
