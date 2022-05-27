<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
	puplic function __construct()
	{
		$this->middleware(['role:admin']);
	}
	puplic function index()
	{
		$users = User::all();
		return view (view:'users.index',compact('users'));
	}
	puplic function edit(User $user)
	{
		return view (view:'users.edit',compact('user'));
	}
	puplic function update(Request $request,User $user)
	{

	}
}
