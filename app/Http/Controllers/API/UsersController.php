<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
	/*puplic function _construct()
	{
		$this->middleware(['role:admin']);
	}
	puplic function index()
	{
		$users = User::all();
		return view (view:'users.index',compact(varname:'users'));
	}
	puplic function edit(User $user)
	{
		return view (view:'users.edit',compact('user'));
	}
	puplic function update(Request $request,User $user)
	{
        $request->validate([
        	'name' => 'required',
        	'roles'=> 'required|array|min:1'
        ]);
        $requestData = $request->except(keys:'email'); 	
        $user->update($requestData);
        $user->syncRoles($request->roles);
        return redirect()->route(route:'users.index');
	}*/
}
