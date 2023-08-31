@extends('NiceAdmin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Articles of {{ $canal -> nom }} </div>
                    <div class="card-body">
                        <h2> Current employe articles  </h2>

                        <ul>
                            @foreach($currentEmployeArticles as $article)
                            <li>{{ $article->titre }}</li>
                            @endforeach
                        </ul>
                        <h2> Other Employes Articles</h2>
                        <ul>
                            @foreach($otherEmployeArticles as $article)
                            <li>{{ $article->titre }}</li>
                            @endforeach
                        </ul>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>    

@endsection