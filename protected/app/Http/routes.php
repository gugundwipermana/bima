<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

View::composer('message', function($view) {
	$view->with('message', app('App\Message'));
});


Route::get('/', function() {

	return '
		<html>
			<head>
			<title>BIMA</title>
			</head>
			<body style="
				width: 100%;
				height: 100%;
				padding: 0;
				margin: 0;
				background-image: url(img/bimaawal.jpg);
					-webkit-background-size: cover;
				    -moz-background-size: cover;
				    -o-background-size: cover;
				    background-size: cover;
			">
			</body>
		</html>
	';

	//return redirect('/en');

});

Route::get('test', function() {

	return redirect('/en');

});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/anyardaftarggn', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


Route::get('/home', ['middleware' => 'auth', function(App\Message $message) {

	$jumCategories = \DB::table('categories')
     				->count();

	$jumProducts = \DB::table('products')
     				->count();

	$jumNewMessages = \DB::table('messages')
     				->where('status', 0)
     				->count();

    $jumUsers = \DB::table('users')
     				->count();
	
	return view('home', compact('jumCategories', 'jumProducts', 'jumNewMessages', 'jumUsers', 'message'));

}]);


Route::resource('abouts', 'AboutsController');
Route::resource('factories', 'FactoriesController');
Route::resource('masters', 'MastersController');

Route::resource('categories', 'CategoriesController');
Route::resource('products', 'ProductsController');

Route::resource('messages', 'MessagesController');
Route::get('messages/{id}/editdes', 'MessagesController@editdes');

Route::resource('users', 'UsersController');
Route::resource('slides', 'SlidesController');


Route::get('panel', function() {

	return redirect('home');

});


Route::get('/{locale}', 'DashboardController@index');