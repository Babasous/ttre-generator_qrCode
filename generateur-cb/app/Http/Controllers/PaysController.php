<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function show(){

        $pays = Pays::all(); //dd($pays);

        return view('affichage.pays', compact('pays'));

    }
}
