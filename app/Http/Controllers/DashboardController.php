<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index(Request $request) 
    {

        $search = $request->input('search');
        $latestArticles = [];

        if (empty($search)) {
            $articles = Article::with('user')->get();
            $latestArticles = Article::orderBy('created_at', 'desc')->take(3)->get();
        } else {
            $articles = Article::where('judul', 'like', '%' . $search . '%')->get();
        }
       
        return view('dashboard', compact('articles', 'latestArticles'));
    }
}
