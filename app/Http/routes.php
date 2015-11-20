<?php

use App\Advertisement;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/advertise', function (){


	$ad = Advertisement::all()->random();

	return view('advertise.index')->with('ad', $ad);

});


Route::get('advertise/create', function (){

	return view('advertise.create');

});

Route::post('advertise/create',function (){

	$image = Input::file('image');
	$move = $image->move('images/advertisements', $image->getClientOriginalName());

	if($move){
		$create = Advertisement::create([
			'title'=> Input::get('title'),
			'image'=> $image->getClientOriginalName(),
			'description'=> Input::get('description'),
			'url'=> Input::get('url')
		]);

		if($create){
			var_dump("created...");
		}
	}




});