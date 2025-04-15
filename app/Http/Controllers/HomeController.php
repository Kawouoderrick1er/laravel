<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    // nouvelle fonction search
    public function search(Request $request)
    {
        $query = $request->input('query');
        //ici on va rechercher dans la base de donnée.
        //pour le moment on renvoie la vue home, on fera le tri apres.
        return view('home');
    }
}

//   `public function index()`: Cette méthode est responsable de la logique de la page d'accueil. Pour le moment, elle renvoie simplement la vue `home`.
