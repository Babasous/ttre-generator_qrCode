<?php

namespace App\Http\Controllers;

use App\Models\Bordereau;
use Illuminate\Http\Request;

class BordereauController extends Controller
{
    public function bordereau(){

        $bordereau = new Bordereau();

        return view('affichage2.bordereau',[BordereauController::class, compact('bordereau')]);
    }

    public function store(Request $request){

        $code_tracking = $request->input('code_tracking');
        $nombre_article = $request->input('nombre_article');
        $article = $request->input('article');
        $description = $request->input('description');

        $bordereau = new Bordereau();

        $bordereau->code_tracking = $code_tracking;
        $bordereau->nombre_article = $nombre_article;
        $bordereau->article = $article;
        $bordereau->description = $description;

        $bordereau->save();

        return view('bordereau.bordereau',[
            'bordereau' => $bordereau,
        ]);
    }
}
