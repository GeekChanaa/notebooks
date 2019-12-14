<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// NOTEBOOKS
Route::get('/notebooks','notebooksController@notebooks');


//Dashboard
Route::get('/dashboard','dashboardController@index');

//Countries
Route::get('/dashboard/countries','countryController@list');
Route::get('/dashboard/countries/create','countryController@create');
Route::get('/dashboard/countries/show/{id}','countryController@show');
Route::post('/dashboard/countries/add','countryController@add');
Route::get('/dashboard/countries/update/{id}','countryController@update');
Route::post('/dashboard/countries/update','countryController@updat');
Route::delete('/dashboard/countries/delete','countryController@delete');


//Notebooks
Route::get('/dashboard/notebooks','notebooksController@list');
Route::get('/dashboard/notebooks/create','notebooksController@create');
Route::post('/dashboard/notebooks/add','notebooksController@add');
Route::post('/dashboard/notebooks/update','notebooksController@updat');
Route::get('/dashboard/notebooks/update/{id}','notebooksController@update');
Route::get('/dashboard/notebooks/show/{id}','notebooksController@show');
Route::delete('/dashboard/notebooks/delete','notebooksController@delete');

//Sections
Route::get('/dashboard/notebook/{notebook_id}/sections','sectionsController@list');
Route::get('/dashboard/notebook/{notebook_id}/sections/create','sectionsController@create');
Route::post('/dashboard/sections/add','sectionsController@add');
Route::post('/dashboard/sections/update','sectionsController@updat');
Route::get('/dashboard/notebook/{notebook_id}/sections/update/{id}','sectionsController@update');
Route::get('/dashboard/sections/show/{id}','sectionsController@show');
Route::delete('/dashboard/sections/delete','sectionsController@delete');

//Chapters
Route::get('/dashboard/section/{section_id}/chapters','chaptersController@list');
Route::get('/dashboard/section/{section_id}/chapters/create','chaptersController@create');
Route::post('/dashboard/chapters/add','chaptersController@add');
Route::post('/dashboard/chapters/update','chaptersController@updat');
Route::get('/dashboard/section/{section_id}/chapters/update/{id}','chaptersController@update');
Route::get('/dashboard/section/{section_id}/chapters/show/{id}','chaptersController@show');
Route::delete('/dashboard/chapters/delete','chaptersController@delete');

//Users
Route::get('/dashboard/users','userController@list');
Route::get('/dashboard/users/show/{id}','userController@show');
Route::delete('/dashboard/users/delete','userController@delete');
Route::get('/dashboard/users/update/{id}','userController@update');
Route::post('/dashboard/users/update','userController@updat');

//DASHBOARD
Route::get('/dashboard/users/statistics','dashboardController@users_statistics');
Route::get('/dashboard/notebooks/statistics','dashboardController@notebooks_statistics');
