@extends('NiceAdmin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit une Infornation </div>
                    <div class="card-body">
                        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            <div class="form-group">
                                <br>
                                <label for="type">Type</label>
                                <select name="type" id="type" class="form-control" required>
                                    <option value="Note">Note</option>
                                    <option value="Memo">Memo</option>
                                    <option value="Rapport">Rapport</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" name="titre" id="titre" class="form-control" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="contenu"> Contenue </label>
                                <textarea rows="3" name="contenu" id="contenu" class="form-control" required> </textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="employe_id">Employé</label>
                                <input type="text" name="employe_id" id="employe_id" class="form-control" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="canal_id">Canal</label>
                                <select name="canal_id" id="canal_id" class="form-control" required>
                                    @foreach($canals as $canal)
                                        <option value="{{$canal->id}}">{{ $canal->nom }}</option>
                                    @endforeach
 
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="fichier">Fichier</label>
                                <input type="file" name="fichier" id="fichier" class="form-control">
                                
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Ajouter</button> <button type="reset" class="btn btn-danger">Annuler </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 