<?php

// Home
Route::get('/', [
	'uses' => 'HomeController@index', 
	'as' => 'home'
]);


// Admin
Route::get('admin', [
	'uses' => 'AdminController@admin',
	'as' => 'admin',
	'middleware' => 'admin'
]);

Route::get('medias', [
	'uses' => 'AdminController@filemanager',
	'as' => 'medias',
	'middleware' => 'redac'
]);


//// Blog
//Route::get('blog/order', ['uses' => 'BlogController@indexOrder', 'as' => 'blog.order']);
//Route::get('articles', 'BlogController@indexFront');
//Route::get('blog/tag', 'BlogController@tag');
//Route::get('blog/search', 'BlogController@search');

//Route::put('postseen/{id}', 'BlogController@updateSeen');
//Route::put('postactive/{id}', 'BlogController@updateActive');
//
Route::get('terrain', 'TerrainController@index');
Route::get('terrain/create', 'TerrainController@create');
Route::post('terrain', 'TerrainController@store');
Route::post('terain-save-coordonate', [ 'as' => 'terain-save-coordonate', 'uses' =>
	'TerrainController@storeCoordonate']);

Route::get('terrain/search', ['as'=>'vendor.search', 'uses' => 'Search\SearchController@index']);

//
//// Comment
//Route::resource('comment', 'CommentController', [
//	'except' => ['create', 'show']
//]);
//
//Route::put('commentseen/{id}', 'CommentController@updateSeen');
//Route::put('uservalid/{id}', 'CommentController@valid');
//

//// Contact
//Route::resource('contact', 'ContactController', [
//	'except' => ['show', 'edit']
//]);


// User
Route::get('user/sort/{role}', 'UserController@indexSort');

Route::get('user/roles', 'UserController@getRoles');
Route::post('user/roles', 'UserController@postRoles');

Route::put('userseen/{user}', 'UserController@updateSeen');

Route::resource('user', 'UserController');

// Auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

require(__DIR__ . "/Routes/Terrain.php");
