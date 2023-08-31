@extends('NiceAdmin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Canaux   </div>
                    <div class="card-body">
                        <ul>
                            @foreach($canaux as $canal)
                             <li><a href="{{ route('articles.indexAc', $canal ) }}">{{ $canal->nom }}</a></li>
                            @endforeach
                        </ul>
                       
                    </div>

                </div>
            </div>
        </div>
    </div>    

@endsection