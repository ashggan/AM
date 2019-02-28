<?php

Route::get('/bars',function(){
    return view('pages.bars');
});


Route::get('/','PagesController@home')->name('home');
Route::get('/about','PagesController@about')->name('about');
Route::get('/profile','PagesController@profile')->name('profile');
Route::get('/portifolio','projectsController@index')->name('portifolio');
Route::get('/project/{$id}','projectsController@showProject')->name('show.project');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/portifolio/project', function () {
    return view('pages.project');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/techs','adminPages@techs');
    Route::get('/gallery','adminPages@gallery')->name('gallery.home');
    Route::get('/project','adminPages@project')->name('project.home');
    Route::get('/show/{id}','adminPages@show')->name('project.show');
    Route::get('/create','adminPages@create')->name('project.create');
    Route::get('/remove/{id}','adminPages@remove')->name('project.remove');
    Route::get('/edit/{id}','adminPages@edit')->name('project.edit');

});

Route::prefix('techs')->middleware('auth')->group(function(){
    // Route::resource('/','TechnoligyController');
    Route::get('/','TechnoligyController@index') ;
    Route::post('/','TechnoligyController@store');
    Route::put('/{id}','TechnoligyController@update');
    Route::delete('/{id}','TechnoligyController@destroy');
});

Route::prefix('gallery')->middleware('auth')->group(function(){
    Route::get('/imgs','GalleryController@getImgs');
    Route::post('/img','GalleryController@save')->name('gallery.save');    
    Route::delete('/img/{id}','GalleryController@remove')->name('gallery.remove');    
}); 

Route::prefix('projects')->middleware('auth')->group(function(){
    // Route::resource('/project','projectsController');
    Route::post('/','projectsController@store');
    Route::put('/{id}','projectsController@update');
    Route::get('/show/{id}','projectsController@show');
});
 
