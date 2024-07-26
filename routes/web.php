<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales suscipit condimentum. Curabitur ante nisl, semper eu fermentum eget, aliquet et nisl. In aliquet non tortor nec egestas. Curabitur varius nisi ac ipsum tempus aliquet. Sed posuere tristique nisi, vel malesuada erat consectetur id. Etiam ut tortor orci. Integer luctus sed tortor eget consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque elementum, quam at congue facilisis, nunc lacus aliquam nisi, eu condimentum dolor odio ullamcorper nulla.',
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'Nam eget eleifend diam, et dictum sem. Duis faucibus lobortis orci, a vehicula lorem finibus a. Integer pharetra efficitur elit non dignissim. Pellentesque ultrices pulvinar velit, non accumsan nunc egestas rhoncus. Etiam posuere justo in suscipit scelerisque. Nunc eu rhoncus dui, vel imperdiet sapien. Integer ac facilisis purus. Nunc id convallis tellus. Mauris ultrices rutrum faucibus.',
            ],
            [
                'id' => 3,
                'title' => 'Listing 3',
                'description' => 'Nunc aliquam odio lorem, vel vehicula lectus hendrerit quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec id nisi ut justo commodo pellentesque. In blandit tincidunt nulla, eu cursus ipsum tincidunt eu. Maecenas ornare consequat pulvinar. Ut vitae porta ipsum, non lobortis metus. Quisque fermentum aliquet ex, eu faucibus sapien feugiat id.',
            ],
        ]
    ]);
});


Route::get('/hello', function() {
    return response('<h1>Content</h1>', 200)
        ->header('Content-Type', 'text/html');
});

Route::get('/posts/{id}', function($id) {
    return response('<h1>Post #' . $id . '</h1>', 200);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    return $request->name . ' ' . $request->city;
});
