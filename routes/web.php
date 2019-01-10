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


Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});

// Route::get('/sample', function() {
// 	return view('sample',
// 		[
// 			'name' => 'juan',
// 			'middlename' => 'dela',
// 			'surname'=> 'cruz'
// 		]
// 	);
// });

//with method
// Route::get('/sample', function() {
// 	$fullname = [
// 			'name' => 'juan',
// 			'middlename' => 'dela',
// 			'surname'=> 'cruz'
// 		];
// 	return view('sample')->with('fullname', $fullname);
// });

//compact method
// Route::get('/sample', function() {
// 	$fullname = [
// 			'name' => 'juan',
// 			'middlename' => 'dela',
// 			'surname'=> 'cruz'
// 		];

// 		$helloworld = "helloworld";
// 	return view('sample', compact('fullname', 'helloworld'));
// });

//greetPerson
Route::get('/sample', "SampleController@greetPerson");

//NameofFruits
Route::get('/fruits', "SampleController@nameofFruits");