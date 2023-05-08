<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UtilisateurController extends Controller{
    public function list(Request $request){
        $articles = Article::with('categorie')->with('technologie')->get();
        // dump($articles);
        return view('User.list', ['articles' => $articles]);
    }
    public function details($slug,$id){
        $article = Article::with('categorie')->with('technologie')->find($id);
        return view('User.details', ['article' => $article]);
    }
}
