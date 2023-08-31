@extends('NiceAdmin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Liste des articles  </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type d'Article</th>
                                    <th>Titre</th>
                                    <th>Contenue</th>
                                    <th>Employe</th>
                                    <th>Canal</th>
                                    <th>Fichier</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{ $article->id  }}</td>
                                        <td>{{ $article->type}}</td>
                                        <td>{{ $article->titre}}</td>
                                        <td>{{ $article->contenu}}</td>
                                        <td>{{ $article->employe_id}}</td>
                                        <td>{{ $article->canal_id}}</td>
                                        <td>
                                        @if ($article->fichier)
                                            <a href="{{asset('storage/files/'.$article ->fichier)}}">{{$article->fichier}}</a>
                                        @else
                                            Aucun fichier associé
                                        @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('articles.show', $article->id)}}" class="btn btn-primary">Voir</a>
                                            <a href="{{ route('articles.edit', $article->id)}}" class="btn btn-warning">Modifier</a>
                                            <form action="{{ route('articles.destroy', $article->id )}}" method="POST" style="display: inline-block; ">
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