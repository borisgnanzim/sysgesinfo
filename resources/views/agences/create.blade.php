@extends('NiceAdmin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Ajouter une agence </div>
                    <div class="card-body">
                        <form action="{{ route('agences.store') }}" method="POST">
                            @csrf 
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="name" id="nom" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="ville">Ville</label>
                                <input type="text" name="ville" id="ville" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" name="adresse" id="adresse" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button> <button type="reset" class="btn btn-danger">Annuler </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection