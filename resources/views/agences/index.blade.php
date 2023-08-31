@extends('NiceAdmin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Liste des agences </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Ville</th>
                                    <th>Adresse</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agences as $agence)
                                    <tr>
                                        <td>{{ $agence->id }}</td>
                                        <td>{{ $agence->nom}}</td>
                                        <td>{{ $agence->ville}}</td>
                                        <td>{{ $agence->adresse}}</td>
                                        <td>
                                            <a href="{{ route('agences.show', $agence->id)}}" class="btn btn-primary">Voir</a>
                                            <a href="{{ route('agences.edit', $agence->id)}}" class="btn btn-warning">Modifier</a>
                                            <form action="{{ route('agences.destroy', $agence->id )}}" method="POST" style="display: inline-block; ">
                                                @csrf 
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Supprimer </button>
                                            </form>
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

@endsection