<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use Illuminate\Routing\Controller;

use App\Models\Article;

use App\Models\Canal;



class ArticleController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::all();
        $cans = Canal::all();
        return view('articles.index',compact('articles','cans'));
    }

    public function create()
    {
        $canals = Canal::all();
        $cans = Canal::all();
        return view('articles.create', compact('canals','cans'));
    }

    public function store(Request $request)
    {

        $article = new Article ;
        
        $article->type = $request->type ;
        $article->titre = $request->titre;
        $article->contenu = $request->contenu ;
        $article->employe_id = $request->employe_id ;
        $article->canal_id = $request->canal_id ;


        // $data = $request->validate([
        //     'type'=>'required',
        //     'titre'=>'required',
        //     'contenu'=>'required',
        //     'employe_id'=>'required',
        //     'canal_id'=>'required',
        //     'fichier'=>'nullable|mimes:jpeg,png,pdf,txt,docx|max:2048',
        // ]);

        // ajout fichier

         if ($request->hasFile('fichier')) {
             $fichier = $request -> file('fichier');
             $nomFichier = time(). '_' . $fichier ->getClientOriginalName();
             $fichier ->storeAs('public/files', $nomFichier);
             $article ->fichier = $nomFichier ;
             //$data['fichier'] = $nomFichier;
            }
        $article-> save();
        
     //  Article::create($request->all()); 

       // Article::create($data);
        return redirect()->route('articles.index')
         ->with('succes','Article créée avec succès.');
    }

    public function show(Article $article)
    {
        $cans = Canal::all();
        return view('articles.show',compact('article','cans'));
    }
    public function edit(Article $article)
    {
        $cans = Canal::all();
        return view('articles.edit',compact('article','cans'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'type'=>'required',
            'titre'=>'required',
            'contenu'=>'required',
            'employe_id'=>'required',
            'canal_id'=>'required',
            'fichier'=>'nullable|mimes:jpeg,png,pdf,rtf|max:10240',
         

        ]);
        $article->update($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Article mise à jour avec succès.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index') 
             ->with('success', 'Article supprimée avec succès.');
    }

    public function indexAc(Canal $canal) 
    {
        $articles = $canal-> articles ;
        $currentEmployeArticles = $articles->where('employe_id', auth()->user()->employe->id);
        $otherEmployeArticles = $articles -> where('employe_id', '!=', auth()->user()->employe-> id);

        $cans = Canal::all();

        return view('articles.indexAc', compact('currentEmployeArticles', 'otherEmployeArticles','cans'));
    }
}
