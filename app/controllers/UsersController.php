<?php

namespace App\Controllers;
use Core\App;

class UsersController 
{
	public function index()
	{
		$users = App::get('database')->selectAll('users');
		return view('users', compact('users'));
	}	

	public function store()
	{
		App::get('database')->insert('users', [
			'name' => $_POST['name']
		]);
		
		return redirect('/users');		
	}
}