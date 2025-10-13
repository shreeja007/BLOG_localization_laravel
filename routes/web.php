<?php

use Illuminate\Support\Facades\Route;




Route::middleware('check.locale')->group(function () {
    Route::get('locale/{lang}', function ($lang) {
        if (in_array($lang, config('app.available_locales'))) {
            session(['locale' => $lang]);
        }
        return redirect()->back();
    })->name("locale.switch");

    Route::get('/', function () {
        return view('welcome');
    });

});


