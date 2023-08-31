@extends('NiceAdmin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Modifier une agence </div>
                    <div class="card-body">
                        <form action="{{ route('agences.update', $agence->id) }}" method="POST">
                            @csrf 
                            @method('PUT')

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="name" id="nom" class="form-control" value="{{ $agence->nom }}" required>
                            </div>

                            <div class="form-group">
                                <label for="ville">Ville</label>
                                <input type="text" name="ville" id="ville" class="form-control" value="{{ $agence->ville }}" required>
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $agence->adresse }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary"> Modifier </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection