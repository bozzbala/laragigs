<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', function() {
    return response()->json([
        'posts' => [
            [
                'title' => 'Post 1',
                'description' => 'Description of post one'
            ],
            [
                'title' => 'Post 2',
                'description' => 'Description of post two'
            ],
            [
                'title' => 'Post 3',
                'description' => 'Description of post three'
            ],
            [
                'title' => 'Post 4',
                'description' => 'Description of post four'
            ],
        ]
    ]);
});
