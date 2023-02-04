<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;

class HomepageController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        $homepageData = [
            'featuredPost' => $articles[0],
            'articles'     => $articles,
        ];

        return view('homepage')->with('homepageData', $homepageData);
    }
}
