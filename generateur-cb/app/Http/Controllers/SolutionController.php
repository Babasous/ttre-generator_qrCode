<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Article;
use App\Models\Solution;
use App\Models\Operateur;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function solution(){
        
        $solution = new Solution();

        $pays = Pays::all();

        $fournisseurs = Fournisseur::all();

        $articles = Article::all();

        $operateurs = Operateur::all(); 

        //return view('affichage.solution',[compact('solution', 'fournisseurs', 'articles', 'operateurs', 'pays')]);

        return view('affichage.solution',[
            
            'solution' => $solution,

            'fournisseurs' => $fournisseurs,

            'articles' => $articles,

            'operateurs' => $operateurs,

            'pays' => $pays,
        ]);
    }
}
