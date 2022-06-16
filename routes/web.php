<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/{text}', function ($text) {
//     return $text . "が表示されます";
// });

// Route::get('/{text?}', function ($text = "テキスト") {
//     return $text . "が表示されます";
// });
