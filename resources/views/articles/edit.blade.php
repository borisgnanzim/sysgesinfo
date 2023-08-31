@extends('NiceAdmin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Modifier un article </div>
                    <div class="card-body">
                        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')
                            <br>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select name="type" id="type" class="form-control" value="{{ $article->type }}" required>
                                    <option value="Note">Note</option>
                                    <option value="Memo">Memo</option>
                                    <option value="Rapport">Rapport</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" name="titre" id="titre" class="form-control" value="{{ $article->titre }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="contenu">Contenue</label>
                                <textarea rows="5" name="contenu" id="contenu" class="form-control"  required >{{ $article->contenu }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="employe_id">Employé</label>
                                <input type="text" name="employe_id" id="employe_id" class="form-control" value="{{ $article->employe_id }}"  required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="canal_id">Canal</label>
                                <input type="text" name="canal_id" id="canal_id" class="form-control" value="{{ $article->canal_id }}"  required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="fichier">Fichier</label>
                                <input type="file" name="fichier" id="fichier" value="{{ $article->fichier }}" class="form-control">
                              
                            </div>
                            
                                <br>
                            <button type="submit" class="btn btn-primary"> Modifier </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection