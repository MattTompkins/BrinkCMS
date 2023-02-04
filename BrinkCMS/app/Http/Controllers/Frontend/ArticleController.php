<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;

/**
 *  Article Controller for the Front End only
 *  This is to be used only to display article
 *  data on the front end of the site.
 */
class ArticleController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function display($slug)
    {
        return view('article')->with('slug', $slug);
    }
}
