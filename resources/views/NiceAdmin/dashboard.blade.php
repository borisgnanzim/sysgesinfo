@extends('NiceAdmin.base')

@section('content')

<style type="text/css">
    td,th{
        text-align:center;
    }
    .b{
        color:black;
        font-weight: bold;
    }

</style>
    <div class="pagetitle">
        <h1>Tableau de bord</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item" > <a href="{{ route('dashboard') }}"> Home</a> </li>
                <li class="breadcrumb-item active">Tableau de bord </li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-xxl-3 col-md-3" >
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 14px;" > <strong>Agence</strong> <span class="vente"></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 20px; height:20px;">
                                        <i class="bi bi-layout-text-window-reverse" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 style="font-size: 18px;"> {{$agence_nbr}}</h6>
                                    </div>

                                </div> 
                            </div>
                        </div>
                    </div>  <!-- End Nbr Agence Card --> 

                    <div class="col-xxl-3 col-md-3" >
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 14px;" > <strong>Employé</strong> <span class="vente"></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 20px; height:20px;">
                                        <i class="bi bi-person" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 style="font-size: 18px;"> {{$employe_nbr}} </h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>  <!-- End Nbr Employé Card -->

                    <div class="col-xxl-3 col-md-3" >
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 14px;" > <strong>Article</strong> <span class="vente"></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 20px; height:20px;">
                                        <i class="bi bi-journal-text" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 style="font-size: 18px;"> {{$article_nbr}}</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>  <!-- End Nbr Article Card -->

                    <div class="col-xxl-3 col-md-3" >
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 14px;" > <strong>Canal</strong> <span class="vente"></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 20px; height:20px;">
                                        <i class="bi bi-menu-button-wide" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 style="font-size: 18px;"> {{$canal_nbr}} </h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>  <!-- End Nbr Canal Card -->



                </div>
            </div>
                <!-- Articles Recents-->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title" align="center"> <strong>Article Recents </strong><span></span></h5>
                        <table class="table table-striped "> 
                            <thead>
                                <tr>
                                    <td class="b"> </td>
                                    <td class="b" >ID</td>
                                    <td class="b">Type</td>
                                    <td class="b">Titre</td>
                                    <td class="b">Contenue</td>
                                    <td class="b">Employe</td>
                                    <td class="b">Canal</td>
                                    <td class="b">Fichier</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $key => $article)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $article->id}}</td>
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
                                </tr>
                            @endforeach    
                            </tbody>
                        </table>

                    </div>

                </div>
            </div> <!-- End Article recent-->

            <!-- Canaux Employé-->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title" align="center"> <strong>Canaux d'Informations</strong> <span></span></h5>
                        <table class="table table-striped "> 
                            <thead>
                                <tr>
                                    <td class="b"> </td>
                                    <td class="b">ID</td>
                                    <td class="b" style="color: black;">Nom</td>
                                    <td class="b">Agence</td>
                                    <td class="b">Departement</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($canaux as $key => $canal)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $canal->id}}</td>
                                    <td>{{ $canal->nom}}</td>
                                    <td>{{ $canal->agence_id}}</td>
                                    <td>{{ $canal->departement_id}}</td>
                                </tr>
                            @endforeach  
                            </tbody>
                        </table>

                    </div>

                </div>
            </div> <!-- End Canaux Employé-->




        </div>

    </section>
@endsection 