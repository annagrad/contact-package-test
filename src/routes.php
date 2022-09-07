<?php

Route::group([
    'namespace' => 'Annagrad\Contact\Http\Controllers'
], function() {
    Route::get('/contact', 'ContactController@get_contact')->name('contact');
    Route::post('/contact', 'ContactController@post_contact')->name('contact');
});