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
                                <h4 class="card-title ">Liste des employers</h4>
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

                                            @foreach ($employes as $employe)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $employe->nomEmployer }}</td>
                                                    <td>{{ $employe->prenomEmployer }}</td>
                                                    <td>{{ $employe->telephoneEmployer }}</td>
                                                    <td>{{ $employe->adresseEmployer }}</td>
                                                    <td>{{ $employe->emailEmployer }}</td>
                                                    
                                                    
                                                    <td>
                                                        <a href="{{route('employer.edit',$employe->id)}}"
                                                            class="btn btn-primary">Modifier</a>
                                                        <a href="{{url('employer.delete',$employe->id)}}"
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
