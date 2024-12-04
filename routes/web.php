<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('articles', [
        'heading' => 'Latest Articles',
        'articles' => Article::all()
    ]);
});


Route::get('/hello', function() {
    return response('<h1>Content</h1>', 200)
        ->header('Content-Type', 'text/html');
});

Route::get('/article/{static_url}', function($static_url) {
    $article = Article::where('static_url', $static_url)
        ->where('is_published', 1)
        ->first();

    if($article) {
        return view('article', [
            "article" => $article
        ]);
    }

    return redirect("/");
});

Route::get('/search', function(Request $request) {
    return $request->name . ' ' . $request->city;
});