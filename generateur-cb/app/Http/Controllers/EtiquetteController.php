<?php

namespace App\Http\Controllers;

use App\Models\Etiquette;
use Illuminate\Http\Request;

class EtiquetteController extends Controller
{
    public function etiquette(){

        $etiquette = new Etiquette();

        return view('affichage.etiquette',[EtiquetteController::class, compact('etiquette')]);
    }
}
