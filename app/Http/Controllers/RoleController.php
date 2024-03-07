<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //
    public function index(){
        $permissions = Permission::get();
        $roles = Role::with('permissions')->get();
        return view('role.index', compact('permissions', 'roles'));
    }
}
