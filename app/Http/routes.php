<?php

use App\User;

Route::get('/', function () {

	//$users = User::all();

    return view('welcome');
});


Route::get('api/users', function () {
	 
	 $users = Datatables::eloquent(User::query())
	 	       ->addColumn('action','buttons')
	 	       ->make(true);
	return $users ;
});


Route::get('users/{user}/edit', function (User $user) {
	 
	 return $user->name;
});
