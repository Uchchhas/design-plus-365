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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',                         'WelcomeController@index');
Route::get('/about',                    'WelcomeController@about');
Route::get('/quote',                    'WelcomeController@quote');
Route::post('/contact-us',              'ContactController@getContactUsForm');

Route::get('/project-view/{id}',        'WelcomeController@projectView');
Route::get('/project-details/{id}',     'WelcomeController@projectDetails');
Route::get('/searchcategoryid',     'WelcomeController@searchCategoryId');



Auth::routes();
// Auth::routes(['register' => false]); 
// Auth::routes(['reset' => false]);
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'AuthenticateMiddleware'], function(){
// Auth::routes(['register' => false]); 
// Auth::routes(['reset' => false]);

    /* User Info */
    Route::get('/user/manage', 'UserController@manageUser');
    /* User Info */

    /* Category Info */
    Route::get('/category/add', 'CategoryController@createCategory');
    Route::post('/category/save', 'CategoryController@storeCategory');
    Route::get('/category/manage', 'CategoryController@manageCategory');
    Route::get('/category/edit/{id}', 'CategoryController@editCategory');
    Route::post('/category/update', 'CategoryController@updateCategory');
    Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');
    /* Category Info */

    /* Project Info */
    Route::get('/project/add', 'ProjectController@createProject');
    Route::post('/project/save', 'ProjectController@storeProject');
    Route::get('/project/manage', 'ProjectController@manageProject');
    Route::get('/project/view/{id}', 'ProjectController@viewProject');
    Route::get('/project/edit/{id}', 'ProjectController@editProject');
    Route::post('/project/update', 'ProjectController@updateProject');
    Route::get('/project/delete/{id}', 'ProjectController@deleteProject');
    /* Project Info */

    Route::get('/project/gallery/add', 'ProjectGalleryController@createProjectGallery');
    Route::post('/project/gallery/save', 'ProjectGalleryController@storeProjectGallery');
    Route::get('/project/gallery/delete/{id}', 'ProjectGalleryController@deleteProjectGallery');




});