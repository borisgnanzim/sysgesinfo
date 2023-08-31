@extends('NiceAdmin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> {{ $agence->nom }} </div>
                    <div class="card-body">
                        <p> <strong>ID :</strong> {{ $agence->id }} </p>
                        <p> <strong>Nom :</strong> {{ $agence->nom }} </p>
                        <p> <strong>Ville :</strong> {{ $agence->ville }} </p>
                        <p> <strong>Adresse :</strong> {{ $agence->adresse }} </p>
                        <a href="{{ route('agences.edit', $agence->id) }}" class="btn btn-warning" > Modifier </a>


                        <form action="{{ route('agences.destroy', $agence->id) }}" method="POST" style="display: inline-block;">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Supprimer</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection