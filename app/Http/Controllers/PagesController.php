<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function reservation(){
        return view('Pages.reservation');
    }
    public function affectation(){
        return view('Pages.affectation');
    }
    public function historique(){
        return view ('Pages.historique');
    }

}
