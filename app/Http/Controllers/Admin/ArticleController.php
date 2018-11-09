<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::get();
        return view('admin.article.index',[
            'data' => $data,
        ]);
    }
}
