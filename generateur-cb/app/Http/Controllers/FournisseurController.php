<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function show(){

        $fournisseurs = Fournisseur::all(); //dd($fournisseurs);

        return view('welcome', compact('fournisseurs'));

    }
}
