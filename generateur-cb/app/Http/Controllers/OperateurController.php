<?php

namespace App\Http\Controllers;

use App\Models\Operateur;
use Illuminate\Http\Request;

class OperateurController extends Controller
{
    public function show(){

        $operateurs = Operateur::all();  //dd($operateurs);

        return view('affichage.operateurs', compact('operateurs'));

    }
}
