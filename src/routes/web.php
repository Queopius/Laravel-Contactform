<?php 

Route::group(['namespace' => 'Queopius\LaravelContactform\Http\Controllers', 'middleware' => ['web']], 
	function(){
	    Route::get('contact', 'ContactFormController@index');
	    Route::post('contact', 'ContactFormController@sendMail')
	    	->name('contact');
});