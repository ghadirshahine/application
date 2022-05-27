<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    $editUser = Permission::create([
    'name' => 'edit-user',
    'display_name' => 'Edit Users', // optional
    'description' => 'edit existing users', // optional
 ]);
}
