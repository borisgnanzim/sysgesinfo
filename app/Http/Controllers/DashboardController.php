<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use App\Models\Article;
use App\Models\Canal;
use App\Models\Agence;
use App\Models\Employe;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::latest()->limit(3)->get();
        $canaux = Canal::latest()->limit(2)->get();
        $agences = Agence::all();
        $employes = Employe::all();

        //
        $cans = Canal::all();

        $article_nbr = count(Article::all());
        $canal_nbr = count(Canal::all());
        $agence_nbr = count(Agence::all());
        $employe_nbr = count(Employe::all());

        return view('NiceAdmin/dashboard',compact('articles','canaux','agences','employes','article_nbr','canal_nbr','agence_nbr','employe_nbr','cans'));
    }
}
  
