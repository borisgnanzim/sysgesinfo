@extends('NiceAdmin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> {{ $article->nom }} </div>
                    <div class="card-body">
                        <p> <strong>ID :</strong> {{ $article->id }} </p>
                        <p> <strong>Type d'Article :</strong> {{ $article->type }} </p>
                        <p> <strong>Titre :</strong> {{ $article->titre }} </p>
                        <p> <strong>Contenue :</strong> {{ $article->contenu }} </p>
                        <p> <strong>Employe :</strong> {{ $article->employe_id }} </p>
                        <p> <strong>Canal :</strong> {{ $article->canal_id }} </p>
                        <p> <strong>Fichier :</strong>
                         @if ($article->fichier)
                                            <a href="{{asset('storage/files/'.$article ->fichier)}}">{{$article->fichier}}</a>
                                        @else
                                            Aucun fichier associé
                        @endif 
                        </p>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning" > Modifier </a>


                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block;">
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
