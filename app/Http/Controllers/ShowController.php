<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ShowController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('tampilData')->with('article', $article);
    }
}
